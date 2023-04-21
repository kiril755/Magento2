<?php

namespace Comment\CommentProductModule\Model\Config;

use Magento\Framework\Option\ArrayInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;

class Options implements ArrayInterface
{
    protected $productRepository;
    protected $searchCriteriaBuilder;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    public function toOptionArray()
    {
        $options = [];
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $products = $this->productRepository->getList($searchCriteria)->getItems();
        foreach ($products as $product) {
            $options[] = [
                'value' => $product->getId(),
                'label' => $product->getName(),
            ];
        }
        return $options;
    }
}

