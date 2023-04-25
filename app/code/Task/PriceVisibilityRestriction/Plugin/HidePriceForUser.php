<?php


namespace Task\PriceVisibilityRestriction\Plugin;

class HidePriceForUser
{
    protected $_customerSession;

    public function __construct(
        \Magento\Customer\Model\Session $session
    ) {
        $this->_customerSession = $session;
    }

    function afterToHtml(\Magento\Catalog\Pricing\Render\FinalPriceBox $subject, $result)
    {
        if (!$this->_customerSession->isLoggedIn()) {
            return $result;
        } else {
            return '';
        }
    }
}
