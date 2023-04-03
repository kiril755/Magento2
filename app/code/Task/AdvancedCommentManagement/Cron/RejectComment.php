<?php

namespace Task\AdvancedCommentManagement\Cron;

use Task\AdvancedCommentManagement\Model\ResourceModel\Item\CollectionFactory;
use Task\ProductCommentModule\Model\ItemFactory;
use Task\AdvancedCommentManagement\Model\Config;
use Magento\Framework\Stdlib\DateTime\DateTime;


class RejectComment
{
    private $collectionFactory;

    private $itemFactory;

    private $config;

    protected $dateTime;

    public function __construct(CollectionFactory $collectionFactory, ItemFactory $itemFactory, Config $config, DateTime $dateTime)
    {
        $this->collectionFactory = $collectionFactory;
        $this->itemFactory = $itemFactory;
        $this->config = $config;
        $this->dateTime = $dateTime;
    }

    public function execute() {
        if ($this->config->isModuleEnabled()) {
            $threeHoursAgo = $this->dateTime->gmtTimestamp() - (3 * 60 * 60);
            $commentCollection = $this->collectionFactory->create()
                ->addFieldToFilter('status', 'pending')
                ->addFieldToFilter('create_time', ['lt' => $threeHoursAgo]);
            foreach ($commentCollection as $comment) {
                $commentModel = $this->itemFactory->create()->load($comment->getId());
                $commentModel->setData('status', 'reject')->save();
            }
        }
    }
}
