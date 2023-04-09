<?php

namespace Task\ProductCommentModule\Block;

use Magento\Framework\View\Element\Template;
use Task\ProductCommentModule\Model\ResourceModel\Item\CollectionFactory;
use Magento\Customer\Model\Session;


class Comment extends Template
{
    private $collectionFactory;
    protected $customerSession;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
//        Magento\Customer\Model\Session $customerSession,
        array $data = []
    )
    {

        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
//        $this->customerSession = $customerSession;
    }

    public function getUserData () {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $objectManager->get('Magento\Customer\Model\Session');

        $userData = [];

        if($customerSession->isLoggedIn()) {
            $name = $customerSession->getCustomerData()->getFirstname();
            $email = $customerSession->getCustomerData()->getEmail();
            return $userData = ['email' => $email, 'name' => $name];
        } else {
            return '';
        }
    }

    /** @return \Task\ProductCommentModule\Model\Item[]  */
    public function getItems () {

        return $this->collectionFactory->create()->addFieldToFilter('status', 'success');

    }
}
