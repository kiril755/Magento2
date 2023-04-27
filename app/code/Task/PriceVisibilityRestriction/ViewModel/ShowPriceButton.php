<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Customer\Model\Session;
use Magento\Catalog\Model\Session as CatalogSession;

class ShowPriceButton implements ArgumentInterface
{
    /**
     * @var Session
     * @var CatalogSession
     */
    private $customerSession;
    private $catalogSession;

    /**
     * @param Session $customerSession
     * @param CatalogSession $catalogSession
     */
    public function __construct(
        Session $customerSession,
        CatalogSession $catalogSession
    )
    {
        $this->customerSession = $customerSession;
        $this->catalogSession = $catalogSession;
    }

    /**
     * @return bool
     */
    public function isUserGuest() : bool
    {
        return !$this->customerSession->isLoggedIn();
    }
    /**
     * @return int
     */
    public function getCurrentProduct() : int
    {
        return (int) $this->catalogSession->getData('last_viewed_product_id');
    }
    /**
     * @return string
     */
    public function setBtnClass() : string
    {
        return $this->customerSession->isLoggedIn() ? 'show-price-btn' : 'show-price-btn-guest';
    }
}
