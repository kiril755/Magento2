<?php


namespace Task\PriceVisibilityRestriction\Plugin;

use Magento\Catalog\Model\Product;
use Magento\Customer\Model\Session;

class HideProductInfoForGuest
{
    protected $customerSession;

    public function __construct(
        Session $customerSession
    ) {
        $this->customerSession = $customerSession;
    }
    public function aroundIsSalable(Product $product, \Closure $proceed)
    {
        return false;
//        if ($this->customerSession->isLoggedIn()) {
//            return $proceed();
//        } else {
//            return false;
//        }
    }

    public function aroundGetPrice(Product $product, \Closure $proceed)
    {
        if ($this->customerSession->isLoggedIn()) {
            return $proceed();
        } else {
            return null;
        }
    }
}
