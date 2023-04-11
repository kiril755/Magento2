<?php

namespace Task\ProductCommentModule\Block;

use Magento\Framework\View\Element\Template;
use Task\ProductCommentModule\Model\ResourceModel\Item\CollectionFactory;
use Magento\Customer\Model\Session;
use Magento\Framework\Escaper;


class Comment extends Template
{
    private $collectionFactory;
    protected $customerSession;
    protected $_escaper;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        Session $customerSession,
        Escaper $_escaper,
        array $data = []
    )
    {

        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
        $this->customerSession = $customerSession;
        $this->_escaper = $_escaper;
    }

    public function getUserData ($arg) {
//        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
//        $customerSession = $objectManager->get('Magento\Customer\Model\Session');

//        $userData = '';

        if($this->customerSession->isLoggedIn()) {
            if ($arg === 'name') {
                return $this->customerSession->getCustomerData()->getFirstname();
            } elseif ($arg === 'email') {
                return $this->customerSession->getCustomerData()->getEmail();
            }
        } else {
            return '';
        }
    }

    /** @return \Task\ProductCommentModule\Model\Item[]  */
    public function getItems () {

        return $this->collectionFactory->create()->addFieldToFilter('status', 'success');

    }
}
