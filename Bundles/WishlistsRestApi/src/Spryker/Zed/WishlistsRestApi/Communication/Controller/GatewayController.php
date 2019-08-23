<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\WishlistsRestApi\Communication\Controller;

use Generated\Shared\Transfer\WishlistItemRequestTransfer;
use Generated\Shared\Transfer\WishlistItemResponseTransfer;
use Generated\Shared\Transfer\WishlistRequestTransfer;
use Generated\Shared\Transfer\WishlistResponseTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Spryker\Zed\WishlistsRestApi\Business\WishlistsRestApiFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\WishlistRequestTransfer $wishlistRequestTransfer
     *
     * @return \Generated\Shared\Transfer\WishlistResponseTransfer
     */
    public function updateWishlistAction(WishlistRequestTransfer $wishlistRequestTransfer): WishlistResponseTransfer
    {
        return $this->getFacade()->updateWishlist($wishlistRequestTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\WishlistRequestTransfer $wishlistRequestTransfer
     *
     * @return \Generated\Shared\Transfer\WishlistResponseTransfer
     */
    public function deleteWishlistAction(WishlistRequestTransfer $wishlistRequestTransfer): WishlistResponseTransfer
    {
        return $this->getFacade()->deleteWishlist($wishlistRequestTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\WishlistItemRequestTransfer $wishlistItemRequestTransfer
     *
     * @return \Generated\Shared\Transfer\WishlistItemResponseTransfer
     */
    public function addWishlistItemAction(WishlistItemRequestTransfer $wishlistItemRequestTransfer): WishlistItemResponseTransfer
    {
        return $this->getFacade()->addItem($wishlistItemRequestTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\WishlistItemRequestTransfer $wishlistItemRequestTransfer
     *
     * @return \Generated\Shared\Transfer\WishlistItemResponseTransfer
     */
    public function deleteWishlistItemAction(WishlistItemRequestTransfer $wishlistItemRequestTransfer): WishlistItemResponseTransfer
    {
        return $this->getFacade()->deleteItem($wishlistItemRequestTransfer);
    }
}
