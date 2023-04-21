<?php

namespace Comment\CommentProductModule\Cron;

use Comment\CommentProductModule\Model\ResourceModel\Comment\CollectionFactory;
use Comment\CommentProductModule\Model\CommentFactory;

use Zend_Db_Expr;


class RejectComment
{
    private $collectionFactory;

    private $commentFactory;

    public function __construct(CollectionFactory $collectionFactory, CommentFactory $commentFactory)
    {
        $this->collectionFactory = $collectionFactory;
        $this->commentFactory = $commentFactory;
    }


    public function execute()
    {
        $commentCollection = $this->collectionFactory->create()
            ->addFieldToFilter('status', 'pending')
            ->addFieldToFilter('create_time', ['lt' => new Zend_Db_Expr("DATE_SUB(NOW(), INTERVAL 3 HOUR)")]);

        foreach ($commentCollection as $comment) {
            $commentModel = $this->itemFactory->create()->load($comment->getId());
            $commentModel->setData('status', 'reject')->save();
        }
    }
}
