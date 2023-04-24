<?php


namespace Task\PriceVisibilityRestriction\Plugin;

use Magento\Catalog\Model\Product;
use Magento\Customer\Model\Session;

class HideProductInfoForGuest
{
    private $customerSession;

    public function __construct(
        Session $customerSession
    ) {
        $this->customerSession = $customerSession;
    }
    public function aroundIsSalable(Product $product, \Closure $proceed)
    {
        if ($this->customerSession->isLoggedIn()) {
            // Customer is logged in, so we don't need to modify the behavior
            return $proceed();
        } else {
            // Customer is a guest, so we need to hide the price and add to cart button
            return false;
        }
    }

    public function aroundGetPrice(Product $product, \Closure $proceed)
    {
        if ($this->customerSession->isLoggedIn()) {
            // Customer is logged in, so we don't need to modify the behavior
            return $proceed();
        } else {
            // Customer is a guest, so we need to hide the price
            return null;
        }
    }
}
