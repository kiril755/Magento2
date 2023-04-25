<?php
namespace Task\PriceVisibilityRestriction\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\App\RequestInterface;
use Magento\Customer\Model\Session;
use Task\PriceVisibilityRestriction\Model\UserRequestFactory;

class SaveUserIp implements ObserverInterface
{
    protected $request;
    protected $customerSession;
    protected $userIpFactory;

    public function __construct(
        RequestInterface $request,
        Session $customerSession,
        UserRequestFactory $userIpFactory
    ) {
        $this->request = $request;
        $this->customerSession = $customerSession;
        $this->userIpFactory = $userIpFactory;
    }

    public function execute(EventObserver $observer)
    {
        $ipAddress = $this->request->getClientIp();

        if ($this->customerSession->isLoggedIn()) {
            $customer = $this->customerSession->getCustomerDataObject();
            $firstname = $customer->getFirstname();

            $userIp = $this->userIpFactory->create();
            $userIp->setLogin($firstname)
                ->setIpAddress($ipAddress)
                ->save();
        } else {

            $userIp = $this->userIpFactory->create();
            $userIp->setLogin('guest')
                ->setIpAddress($ipAddress)
                ->save();
        }
    }
}
