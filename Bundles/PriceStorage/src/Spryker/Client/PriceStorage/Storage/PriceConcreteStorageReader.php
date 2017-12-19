<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\PriceStorage\Storage;

use Generated\Shared\Transfer\PriceProductStorageTransfer;
use Spryker\Client\PriceStorage\Dependency\Client\PriceStorageToStorageInterface;
use Spryker\Shared\PriceStorage\PriceStorageConstants;

class PriceConcreteStorageReader implements PriceConcreteStorageReaderInterface
{
    /**
     * @var \Spryker\Client\PriceStorage\Dependency\Client\PriceStorageToStorageInterface
     */
    protected $storageClient;

    /**
     * @var PriceStorageKeyGeneratorInterface
     */
    protected $priceStorageKeyGenerator;

    /**
     * @param \Spryker\Client\PriceStorage\Dependency\Client\PriceStorageToStorageInterface $storageClient
     * @param PriceStorageKeyGeneratorInterface $priceStorageKeyGenerator
     */
    public function __construct(PriceStorageToStorageInterface $storageClient, PriceStorageKeyGeneratorInterface $priceStorageKeyGenerator)
    {
        $this->storageClient = $storageClient;
        $this->priceStorageKeyGenerator = $priceStorageKeyGenerator;
    }

    /**
     * @param int $idProductConcrete
     *
     * @return \Generated\Shared\Transfer\PriceProductStorageTransfer|null
     */
    public function findPriceConcreteStorageTransfer($idProductConcrete)
    {
        $key = $this->priceStorageKeyGenerator->generateKey(PriceStorageConstants::PRICE_CONCRETE_RESOURCE_NAME, $idProductConcrete);

        return $this->findPriceProductStorageTransfer($key);
    }

    /**
     * @param string $key
     *
     * @return PriceProductStorageTransfer|null
     */
    protected function findPriceProductStorageTransfer($key)
    {
        $priceData = $this->storageClient->get($key);

        if (!$priceData) {
            return null;
        }

        $priceProductStorageTransfer = new PriceProductStorageTransfer();
        $priceProductStorageTransfer->fromArray($priceData, true);

        return $priceProductStorageTransfer;
    }

}
