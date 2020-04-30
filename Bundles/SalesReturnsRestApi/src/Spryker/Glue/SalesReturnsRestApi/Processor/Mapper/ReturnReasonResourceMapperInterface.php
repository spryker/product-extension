<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\SalesReturnsRestApi\Processor\Mapper;

use ArrayObject;

interface ReturnReasonResourceMapperInterface
{
    /**
     * @param \ArrayObject|\Generated\Shared\Transfer\ReturnReasonTransfer[] $returnReasonTransfers
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\RestReturnReasonsAttributesTransfer[]
     */
    public function mapReturnReasonTransfersToRestReturnReasonsAttributesTransfers(
        ArrayObject $returnReasonTransfers,
        string $localeName
    ): array;
}
