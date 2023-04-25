<?php

namespace Task\PriceVisibilityRestriction\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Task\PriceVisibilityRestriction\Model\UserRequestFactory;

class SaveIp extends Action
{
    protected $userRequestFactory;

    public function __construct(
        Context $context,
        UserRequestFactory $userRequestFactory
    ) {
        parent::__construct($context);
        $this->userRequestFactory = $userRequestFactory;
    }

    public function execute()
    {
        $ipAddress = $this->getRequest()->getClientIp();
        $userRequest = $this->userRequestFactory->create();
        $userRequest->setLogin('guest');
        $userRequest->setIpAddress($ipAddress);
        $userRequest->create();


        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('customer/account/login');
        return $resultRedirect;
    }
}
