<?php

namespace Mastering\SampleKirilModule\Block;

use Magento\Framework\View\Element\Template;
use Mastering\SampleKirilModule\Model\ResourceModel\Item\Collection;
use Mastering\SampleKirilModule\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }


         /** @return \Mastering\SampleKirilModule\Model\Item[]  */
        public function getItems () {
        return $this->collectionFactory->create()->getItems();
    }
}
