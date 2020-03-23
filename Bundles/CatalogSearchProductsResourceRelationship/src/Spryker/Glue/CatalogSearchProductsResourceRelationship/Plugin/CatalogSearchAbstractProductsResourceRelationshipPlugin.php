<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CatalogSearchProductsResourceRelationship\Plugin;

use Spryker\Glue\CatalogSearchProductsResourceRelationship\CatalogSearchProductsResourceRelationshipConfig;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRelationshipPluginInterface;
use Spryker\Glue\Kernel\AbstractPlugin;

/**
 * @method \Spryker\Glue\CatalogSearchProductsResourceRelationship\CatalogSearchProductsResourceRelationshipFactory getFactory()
 */
class CatalogSearchAbstractProductsResourceRelationshipPlugin extends AbstractPlugin implements ResourceRelationshipPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @Glue({
     *     "resourceAttributesClassName": "\\Generated\\Shared\\Transfer\\RestCatalogSearchAbstractProductsTransfer"
     * })
     *
     * - Adds `abstract-products` as a relationship.
     *
     * @api
     *
     * @param array $resources
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     *
     * @return void
     */
    public function addResourceRelationships(array $resources, RestRequestInterface $restRequest): void
    {
        $this->getFactory()
            ->createCatalogSearchProductsResourceRelationshipExpander()
            ->addResourceRelationships($resources, $restRequest);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getRelationshipResourceType(): string
    {
        return CatalogSearchProductsResourceRelationshipConfig::RESOURCE_ABSTRACT_PRODUCTS;
    }
}
