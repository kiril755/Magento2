<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Block;

use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;
use Magento\Catalog\Model\Session as CatalogSession;
use Magento\Backend\Block\Template\Context;

class ShowPriceButton extends Template
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
        Context $context,
        Session $customerSession,
        CatalogSession $catalogSession,
        array $data = []
    )
    {
        parent::__construct($context, $data);
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
     * @return string
     */
    public function setBtnClass() : string
    {
        return $this->customerSession->isLoggedIn() ? 'show-price-btn' : 'show-price-btn-guest';
    }
}
