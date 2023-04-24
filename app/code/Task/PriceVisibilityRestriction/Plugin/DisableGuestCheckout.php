<?php

namespace Task\PriceVisibilityRestriction\Plugin;

use Magento\Customer\Model\Session;
//use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\UrlInterface;

class DisableGuestCheckout
{
    /**
     * @var Session
     */
    private $customerSession;

    /**
     * @var RedirectFactory
     */
    private $resultFactory;

    public function __construct(
        Session $customerSession,
        ResultFactory $resultFactory,
    ) {
        $this->customerSession = $customerSession;
        $this->resultFactory = $resultFactory;
    }

    public function aroundExecute($subject, $proceed)
    {
        if (!$this->customerSession->isLoggedIn()) {
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl('customer/account/login');

            return $redirect;
        }
        return $proceed();
    }
}
