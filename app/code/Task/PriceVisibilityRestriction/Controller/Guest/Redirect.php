<?php

namespace Task\PriceVisibilityRestriction\Controller\Guest;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;

class Redirect extends Action
{
    protected $customerSession;
    protected $eventManager;

    public function __construct(Context $context, Session $customerSession, EventManager $eventManager)
    {
        parent::__construct($context);
        $this->customerSession = $customerSession;
        $this->eventManager = $eventManager;
    }

    public function execute()
    {
        if (!$this->customerSession->isLoggedIn()) {
            $this->eventManager->dispatch('price_request_event_before');
            return $this->resultRedirectFactory->create()->setPath('customer/account/login');
        } else {
            return $this->resultRedirectFactory->create()->setPath('');
        }
    }

}
