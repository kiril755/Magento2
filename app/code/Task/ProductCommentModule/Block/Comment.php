<?php

namespace Task\ProductCommentModule\Block;

use Magento\Framework\View\Element\Template;
use Task\ProductCommentModule\Model\ResourceModel\Item\Collection;
use Task\ProductCommentModule\Model\ResourceModel\Item\CollectionFactory;
class Comment extends Template
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


    /** @return \Task\ProductCommentModel\Model\Item[]  */
    public function getItems () {
        return $this->collectionFactory->create()->getItems();
    }
}
