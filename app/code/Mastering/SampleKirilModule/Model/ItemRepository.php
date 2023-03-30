<?php

namespace Mastering\SampleKirilModule\Model;

use Mastering\SampleKirilModule\Api\ItemRepositoryInterface;
use Mastering\SampleKirilModule\Model\ResourceModel\Item\CollectionFactory;
class ItemRepository implements ItemRepositoryInterface
{
    private $collectionFactory;
    public function __construct(CollectionFactory $collectionFactory) {
        $this->collectionFactory = $collectionFactory;
    }
    public  function getList() {
        return $this->collectionFactory->create()->getItems();
    }
}
