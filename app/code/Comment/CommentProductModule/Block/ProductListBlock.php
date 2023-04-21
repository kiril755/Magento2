<?php

namespace Comment\CommentProductModule\Block;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class ProductListBlock extends Template
{
    protected $productRepository;
    protected $selectedProductIds;
    protected $searchCriteriaBuilder;
    protected $_imageHelper;


    public function __construct(
        Context $context,
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Catalog\Helper\Image $imageHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->_imageHelper = $imageHelper;
        $this->selectedProductIds = explode(',', $this->_scopeConfig->getValue('comment/general/product_id'));
    }

    public function getProductCollection()
    {
        $searchCriteria = $this->searchCriteriaBuilder->addFilter('entity_id', $this->selectedProductIds, 'in')->create();
        $result = $this->productRepository->getList($searchCriteria);
        $productCollection = $result->getItems();
        foreach ($productCollection as &$product) {
            $image = $this->_imageHelper->init($product, 'product_base_image')->getUrl();
            $product->setImage($image);
        }
        return $productCollection;
    }
}
