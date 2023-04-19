<?php

namespace Task\ProductCommentModule\Controller\Form;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Event\ManagerInterface;
use Task\ProductCommentModule\Model\ItemFactory;

class Submit extends Action
{

    private $itemFactory;

    private $eventManager;

    public function __construct(Context $context, ItemFactory $itemFactory, ManagerInterface $eventManager)
    {
        $this->itemFactory = $itemFactory;
        $this->eventManager = $eventManager;
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
//        $item->save();

        $this->eventManager->dispatch('task_comment_send_email', ['object' => $item]);

        // Return response
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultPage->setUrl('/task/');
        return $resultPage;
    }

}
