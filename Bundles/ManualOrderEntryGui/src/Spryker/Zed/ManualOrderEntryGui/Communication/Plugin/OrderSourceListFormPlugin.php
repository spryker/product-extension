<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ManualOrderEntryGui\Communication\Plugin;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\ManualOrderEntryGui\Communication\Form\OrderSource\OrderSourceListType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Spryker\Zed\ManualOrderEntryGui\Communication\ManualOrderEntryGuiCommunicationFactory getFactory()
 */
class OrderSourceListFormPlugin extends AbstractPlugin implements ManualOrderEntryFormPluginInterface
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer|null $dataTransfer
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    public function createForm(Request $request, $dataTransfer = null): FormInterface
    {
        return $this->getFactory()->createOrderSourceListForm($request, $dataTransfer);
    }

    /**
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer|\Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param \Symfony\Component\Form\FormInterface $form
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Spryker\Shared\Kernel\Transfer\AbstractTransfer
     */
    public function handleData($quoteTransfer, &$form, $request): AbstractTransfer
    {
        $orderSourceTransfer = $this->getFactory()->getManualOrderEntryFacade()->findOrderSourceByIdOrderSource(
            $quoteTransfer->getOrderSource()->getIdOrderSource()
        );
        $quoteTransfer->setOrderSource($orderSourceTransfer);

        return $quoteTransfer;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return OrderSourceListType::TYPE_NAME;
    }
}
