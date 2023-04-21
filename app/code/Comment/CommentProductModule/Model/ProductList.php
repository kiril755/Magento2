<?php
namespace Comment\CommentProductModule\Model;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;

class ProductList implements OptionSourceInterface
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
        $productCollection = $this->productRepository->getList($searchCriteria);
        foreach ($productCollection->getItems() as $product) {
            $options[] = [
                'value' => $product->getId(),
                'label' => $product->getName()
            ];
        }
        return $options;
    }
}

