<?php

namespace Comment\CommentProductModule\Controller\Form;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Event\ManagerInterface;
use Comment\CommentProductModule\Model\CommentFactory;

class Submit extends Action
{

    private $commentFactory;

    private $eventManager;

    protected $resultRedirectFactory;


    public function __construct(Context $context, CommentFactory $commentFactory, ManagerInterface $eventManager, ResultFactory $resultFactory)
    {
        $this->commentFactory = $commentFactory;
        $this->eventManager = $eventManager;
        $this->resultRedirectFactory = $resultFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        $productId = $this->getRequest()->getParam('product_id');
        $textValue = $this->getRequest()->getParam('text');
        $nicknameValue = $this->getRequest()->getParam('nickname');
        $emailValue = $this->getRequest()->getParam('email');

        // Save form data to database
        $item = $this->commentFactory->create();
        $item->setProductLink($this->_redirect->getRefererUrl());
        $item->setProductId($productId);
        $item->setNickname($nicknameValue);
        $item->setEmail($emailValue);
        $item->setText($textValue);
        $item->save();


        // Return to the product page
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
    }

}
