<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductCategoryStorage\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\ProductCategoryStorage\Business\Storage\ProductCategoryStorageWriter;
use Spryker\Zed\ProductCategoryStorage\Business\Storage\ProductCategoryStorageWriterInterface;
use Spryker\Zed\ProductCategoryStorage\Dependency\Facade\ProductCategoryStorageToCategoryInterface;
use Spryker\Zed\ProductCategoryStorage\Dependency\Facade\ProductCategoryStorageToStoreFacadeInterface;
use Spryker\Zed\ProductCategoryStorage\ProductCategoryStorageDependencyProvider;

/**
 * @method \Spryker\Zed\ProductCategoryStorage\ProductCategoryStorageConfig getConfig()
 * @method \Spryker\Zed\ProductCategoryStorage\Persistence\ProductCategoryStorageQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\ProductCategoryStorage\Persistence\ProductCategoryStorageRepositoryInterface getRepository()
 */
class ProductCategoryStorageBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Spryker\Zed\ProductCategoryStorage\Business\Storage\ProductCategoryStorageWriterInterface
     */
    public function createProductCategoryStorageWriter(): ProductCategoryStorageWriterInterface
    {
        return new ProductCategoryStorageWriter(
            $this->getCategoryFacade(),
            $this->getStoreFacade(),
            $this->getRepository()
        );
    }

    /**
     * @return \Spryker\Zed\ProductCategoryStorage\Dependency\Facade\ProductCategoryStorageToCategoryInterface
     */
    public function getCategoryFacade(): ProductCategoryStorageToCategoryInterface
    {
        return $this->getProvidedDependency(ProductCategoryStorageDependencyProvider::FACADE_CATEGORY);
    }

    /**
     * @return \Spryker\Zed\ProductCategoryStorage\Dependency\Facade\ProductCategoryStorageToStoreFacadeInterface
     */
    public function getStoreFacade(): ProductCategoryStorageToStoreFacadeInterface
    {
        return $this->getProvidedDependency(ProductCategoryStorageDependencyProvider::FACADE_STORE);
    }
}
