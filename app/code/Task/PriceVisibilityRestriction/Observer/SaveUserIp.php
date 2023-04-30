<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\App\RequestInterface;
use Magento\Customer\Model\Session;
use Task\PriceVisibilityRestriction\Model\UserRequestFactory;

class SaveUserIp implements ObserverInterface
{
    /**
     * @var RequestInterface
     * @var Session
     * @var UserRequestFactory
     */
    private $request;
    private $customerSession;
    private $userIpFactory;

    /**
     * @param RequestInterface $request
     * @param Session $customerSession
     * @param UserRequestFactory $userIpFactory
     */
    public function __construct(
        RequestInterface $request,
        Session $customerSession,
        UserRequestFactory $userIpFactory
    ) {
        $this->request = $request;
        $this->customerSession = $customerSession;
        $this->userIpFactory = $userIpFactory;
    }

    /**
     * @param EventObserver $observer
     * @return void
     */
    public function execute(EventObserver $observer) : void
    {
        if (!($observer instanceof EventObserver)) {
            return;
        }

        $ipAddress = $this->request->getClientIp();
        $firstname = $this->customerSession->isLoggedIn()
            ? $this->customerSession->getCustomerDataObject()->getFirstname()
            : 'guest';

        $userIp = $this->userIpFactory->create();
        $userIp->setLogin($firstname)
            ->setIpAddress($ipAddress)
            ->save();
    }
}
