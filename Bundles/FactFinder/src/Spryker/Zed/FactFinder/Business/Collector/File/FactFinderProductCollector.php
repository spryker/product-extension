<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FactFinder\Business\Collector\File;

use Generated\Shared\Transfer\LocaleTransfer;
use Pyz\Zed\Collector\Business\Storage\ProductCollector as StorageProductCollector;
use Pyz\Zed\Collector\CollectorConfig;
use Spryker\Zed\Collector\Business\Exporter\Writer\File\FileWriterInterface;
use Spryker\Zed\Collector\Business\Exporter\Writer\Storage\TouchUpdaterSet;
use Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface;
use Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface;
use Spryker\Zed\Collector\Business\Model\BatchResultInterface;
use Spryker\Zed\FactFinder\Business\Api\ApiConstants;
use Symfony\Component\Console\Helper\ProgressBar;

class FactFinderProductCollector extends StorageProductCollector
{

    const ABSTRACT_ATTRIBUTES_LONG_DESCRIPTION = 'long_description';
    const ABSTRACT_ATTRIBUTES_IMAGE_SMALL = 'image_small';

    /**
     * @var int
     */
    protected $chunkSize = 50000;

    /**
     * @var \Pyz\Zed\Collector\CollectorConfig
     */
    protected $config;

    /**
     * @param \Pyz\Zed\Collector\CollectorConfig $config
     *
     * @return void
     */
    public function setConfig(CollectorConfig $config)
    {
        $this->config = $config;
    }

    /**
     * @return \Pyz\Zed\Collector\CollectorConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param string $touchKey
     * @param array $collectItemData
     *
     * @return array
     */
    protected function collectItem($touchKey, array $collectItemData)
    {
        $abstractAttributes = $this->getAbstractAttributes($collectItemData);
        if (!isset($collectItemData[CollectorConfig::COLLECTOR_RESOURCE_ID])){
            return [];
        }
        $generatedCategories = $this->generateCategories((int)$collectItemData[CollectorConfig::COLLECTOR_RESOURCE_ID]);
        $category = '';
        $categoryPaths = [];
        foreach ($generatedCategories as $generatedCategory) {
            $category = $generatedCategory['name'];
            $categoryPaths[] = $generatedCategory['name'];
        }
        if (isset($collectItemData[self::ID_IMAGE_SET])) {
            $imgs = $this->generateImages($collectItemData[self::ID_IMAGE_SET]);
        } else {
            $imgs = [];
        }
        $imageURL = '';
        if (count($imgs)) {
            $imageURL = $this->getConfig()->getHostYves() . $imgs[0]['external_url_large'];
        }
        return [
            ApiConstants::ITEM_PRODUCT_NUMBER => $collectItemData[self::ABSTRACT_SKU],
            ApiConstants::ITEM_NAME => $collectItemData[self::ABSTRACT_NAME],
            ApiConstants::ITEM_PRICE => $this->getPriceBySku($collectItemData[self::ABSTRACT_SKU]),
            ApiConstants::ITEM_STOCK =>  (int)$collectItemData[self::QUANTITY],
            ApiConstants::ITEM_CATEGORY => $category,
            ApiConstants::ITEM_CATEGORY_PATH => implode('/', $categoryPaths),
            ApiConstants::ITEM_PRODUCT_URL =>  $this->getConfig()->getHostYves() . $collectItemData[self::ABSTRACT_URL],
            ApiConstants::ITEM_IMAGE_URL => $imageURL,
            ApiConstants::ITEM_DESCRIPTION => $abstractAttributes[self::ABSTRACT_ATTRIBUTES_LONG_DESCRIPTION],
        ];
    }

    /**
     * @param string $sku
     *
     * @return float
     */
    protected function getPriceBySku($sku)
    {
        return $this->priceFacade->getPriceBySku($sku) / 100;
    }

    /**
     * @param array $batch
     * @param \Symfony\Component\Console\Helper\ProgressBar $progressBar
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\TouchUpdaterInterface $touchUpdater
     * @param \Spryker\Zed\Collector\Business\Model\BatchResultInterface $batchResult
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\WriterInterface $storeWriter
     *
     * @return void
     */
    protected function processBatchForExport(
        array $batch,
        ProgressBar $progressBar,
        LocaleTransfer $locale,
        TouchUpdaterInterface $touchUpdater,
        BatchResultInterface $batchResult,
        WriterInterface $storeWriter
    ) {
        $batchSize = count($batch);
        $progressBar->advance($batchSize);

        $touchUpdaterSet = new TouchUpdaterSet(CollectorConfig::COLLECTOR_TOUCH_ID);
        $collectedData = $this->collectData($batch, $locale, $touchUpdaterSet);
        $collectedDataCount = count($collectedData);

        $touchUpdater->bulkUpdate(
            $touchUpdaterSet,
            $locale->getIdLocale(),
            $this->touchQueryContainer->getConnection()
        );
        $storeWriter->write($collectedData, $this->collectResourceType());

        // after $chunkSize we create new export file
        $this->iterateFileName($storeWriter);

        $batchResult->increaseProcessedCount($collectedDataCount);
    }

    /**
     * @param \Spryker\Zed\Collector\Business\Exporter\Writer\File\FileWriterInterface $storeWriter
     * @return void
     */
    protected function iterateFileName(FileWriterInterface $storeWriter)
    {
        $fileName = $storeWriter->getFileName();
        $fileInfo = new \SplFileInfo($fileName);
        $fileExtension = $fileInfo->getExtension();
        preg_match('/(.*?)(\d*)\.' . $fileExtension . '$/', $fileName, $matches);

        $iterate = (int)$matches[2] + 1;
        $newFileName = $matches[1] . $iterate . '.' . $fileExtension;

        $storeWriter->setFileName($newFileName);
    }

}
