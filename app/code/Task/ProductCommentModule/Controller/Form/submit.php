<?php

namespace Task\ProductCommentModule\Controller\Form;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Task\ProductCommentModule\Model\ItemFactory;

class Submit extends Action
{

    private $itemFactory;
    public function __construct(Context $context, ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $textValue = $this->getRequest()->getParam('text');
        $nicknameValue = $this->getRequest()->getParam('nickname');
        $emailValue = $this->getRequest()->getParam('email');

        // Save form data to database
        $item = $this->itemFactory->create();
        $item->setNickname($nicknameValue);
        $item->setEmail($emailValue);
        $item->setText($textValue);
        $item->save();

        // Return response
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultPage->setUrl('/task/');
        return $resultPage;
    }

}
