<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\StorageDatabase\StorageTableNameResolver;

interface StorageTableNameResolverInterface
{
    /**
     * @param string $resourceKey
     *
     * @return string
     */
    public function resolveByResourceKey(string $resourceKey): string;
}
