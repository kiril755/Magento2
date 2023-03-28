<?php

namespace Mastering\SampleKirilModule\Cron;

use Mastering\SampleKirilModule\Model\ItemFactory;

class AddItem
{
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute() {
        $this->itemFactory->create()
            ->setName('Scheduled item')
            ->setDescription('Created at ' . time())
            ->save();
    }
}
