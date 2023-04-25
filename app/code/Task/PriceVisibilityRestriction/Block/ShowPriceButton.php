<?php

namespace Task\PriceVisibilityRestriction\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Registry;
use Magento\Backend\Block\Template\Context;
use Magento\Customer\Model\Session;

class ShowPriceButton extends Template
{
    protected $_registry;

    protected $customerSession;

    public function __construct(
        Context $context,
        Registry $registry,
        Session $customerSession,
        array $data = []
    )
    {
        $this->_registry = $registry;
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }
    public function getButtonText()
    {
        return __('Show Price');
    }

    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product')->getId();
    }

    public function isUserGuest() {
        return ($this->customerSession->isLoggedIn());
    }
}
