<?php

namespace Comment\CommentProductModule\Block\Comment;

use Magento\Framework\View\Element\Template;
use Comment\CommentProductModule\Model\ResourceModel\Comment\CollectionFactory;
use Magento\Customer\Model\Session;
use Magento\Framework\Escaper;
use Magento\Catalog\Model\Product;
use Magento\Framework\Registry;


class Comment extends Template
{
    private $collectionFactory;
    protected $customerSession;
    protected $_escaper;
    protected $_registry;
    protected $_product;
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        Session $customerSession,
        Escaper $_escaper,
        Registry $registry,
        Product $product,
        array $data = []
    )
    {

        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
        $this->customerSession = $customerSession;
        $this->_escaper = $_escaper;
        $this->_registry = $registry;
        $this->_product = $product;
    }

    public function getCurrentProductId() {
        $product = $this->_registry->registry('current_product');
        if ($product) {
            return $product->getId();
        }
        return null;
    }

    public function getUserData ($arg) {

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
    public function getItems () {

        $productId = $this->getCurrentProductId();
        if ($productId) {
            $collection = $this->collectionFactory->create();
            $collection->addFieldToFilter('product_id', $productId);
            $collection->addFieldToFilter('status', 'success');
            return $collection;
        } else {
            return [];
        }

    }
}
