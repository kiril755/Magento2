<?php

namespace Task\PriceVisibilityRestriction\Plugin;

use Magento\Catalog\Block\Product\View as ProductView;

class HidePriceForGuest
{
    public function beforeGetProductPriceHtml(ProductView $productView)
    {
        // Check if the customer is a guest
        if (!$productView->getCustomerSession()->isLoggedIn()) {
            // Hide the price for guests
            return '';
        }

        // Otherwise, let the original method execute as normal
        return null;
    }
}
