<?php

namespace Task\AdvancedCommentManagement\Cron;

use Task\AdvancedCommentManagement\Model\ResourceModel\Item\CollectionFactory;
use Task\ProductCommentModule\Model\ItemFactory;
use Task\AdvancedCommentManagement\Model\Config;

use Zend_Db_Expr;



class RejectComment
{
    private $collectionFactory;

    private $itemFactory;

    private $config;

    public function __construct(CollectionFactory $collectionFactory, ItemFactory $itemFactory, Config $config)
    {
        $this->collectionFactory = $collectionFactory;
        $this->itemFactory = $itemFactory;
        $this->config = $config;
    }

    public function execute() {
        if ($this->config->isModuleEnabled()) {
            $commentCollection = $this->collectionFactory->create()
                ->addFieldToFilter('status', 'pending')
                ->addFieldToFilter('create_time', ['lt' => new Zend_Db_Expr("DATE_SUB(NOW(), INTERVAL 3 HOUR)")]);

            foreach ($commentCollection as $comment) {
                $commentModel = $this->itemFactory->create()->load($comment->getId());
                $commentModel->setData('status', 'reject')->save();
            }
        }
    }
}
