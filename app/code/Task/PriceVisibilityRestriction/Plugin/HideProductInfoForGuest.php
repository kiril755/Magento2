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
     * @param mixed $result
     * @return mixed
     */
    public function afterGetPrice(Product $product, $result) : mixed
    {
        return $this->customerSession->isLoggedIn() ? $result : null;
    }
}
