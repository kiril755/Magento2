<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Plugin;

use Magento\Catalog\Model\Product;
use Magento\Customer\Model\Session;

class HideProductInfoForGuest
{
    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @param Session $customerSession
     */
    public function __construct(
        Session $customerSession
    ) {
        $this->customerSession = $customerSession;
    }

    /**
     * @param Product $product
     * @param Callable $proceed
     * @return mixed
     */
    public function aroundGetPrice(Product $product, Callable $proceed) : mixed
    {
        return $this->customerSession->isLoggedIn() ? $proceed() : null;
    }
}
