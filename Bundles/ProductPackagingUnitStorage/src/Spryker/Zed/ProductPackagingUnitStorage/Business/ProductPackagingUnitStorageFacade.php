<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductPackagingUnitStorage\Business;

use Generated\Shared\Transfer\FilterTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Spryker\Zed\ProductPackagingUnitStorage\Business\ProductPackagingUnitStorageBusinessFactory getFactory()
 * @method \Spryker\Zed\ProductPackagingUnitStorage\Persistence\ProductPackagingUnitStorageEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\ProductPackagingUnitStorage\Persistence\ProductPackagingUnitStorageRepositoryInterface getRepository()
 */
class ProductPackagingUnitStorageFacade extends AbstractFacade implements ProductPackagingUnitStorageFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param int[] $productConcreteIds
     *
     * @return void
     */
    public function publishProductPackagingUnit(array $productConcreteIds): void
    {
        $this->getFactory()
            ->createProductPackagingUnitStorageWriter()
            ->publishProductPackagingUnit($productConcreteIds);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param int[] $productConcreteIds
     *
     * @return void
     */
    public function unpublishProductPackagingUnit(array $productConcreteIds): void
    {
        $this->getFactory()
            ->createProductPackagingUnitStorageWriter()
            ->unpublishProductPackagingUnit($productConcreteIds);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param int[] $productPackagingUnitTypeIds
     *
     * @return int[]
     */
    public function findProductIdsByProductPackagingUnitTypeIds(array $productPackagingUnitTypeIds): array
    {
        return $this->getFactory()
            ->getProductPackagingUnitFacade()
            ->findProductIdsByProductPackagingUnitTypeIds($productPackagingUnitTypeIds);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filterTransfer
     *
     * @return \Generated\Shared\Transfer\SpyProductPackagingLeadProductEntityTransfer[]
     */
    public function getProductPackagingLeadProductCollectionByFilter(FilterTransfer $filterTransfer): array
    {
        return $this->getRepository()->getProductPackagingLeadProductCollectionByFilter($filterTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\FilterTransfer $filterTransfer
     * @param int[] $productAbstractIds
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractPackagingStorageEntityTransfer[]
     */
    public function getProductAbstractPackagingStorageCollectionByFilter(FilterTransfer $filterTransfer, array $productAbstractIds): array
    {
        return $this->getRepository()->getProductAbstractPackagingStorageCollectionByFilter($filterTransfer, $productAbstractIds);
    }
}
