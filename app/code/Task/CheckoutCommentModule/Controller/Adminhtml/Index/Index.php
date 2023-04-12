<?php

namespace Task\CheckoutCommentModule\Controller\Adminhtml\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Task\CheckoutCommentModule\Model\ResourceModel\Comment\CollectionFactory;

class Index extends Action
{
    private $commentCollectionFactory;
    private $jsonFactory;

    public function __construct(
        Context $context,
        CollectionFactory $commentCollectionFactory,
        JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->commentCollectionFactory = $commentCollectionFactory;
        $this->jsonFactory = $jsonFactory;
    }

    public function execute()
    {
        $commentCollection = $this->commentCollectionFactory->create();
        $commentCollection->setOrder('create_time', 'desc')->setPageSize(5)->load();

        $comments = [];
        foreach ($commentCollection as $comment) {
            $comments[] = $comment->getText();
        }

        $result = $this->jsonFactory->create();
        $result->setData($comments);

        return $result;
    }
}
