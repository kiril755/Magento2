<?php

namespace Comment\CommentProductModule\Ui\Component\Columns;

use \Magento\Framework\View\Element\UiComponent\ContextInterface;
use \Magento\Framework\View\Element\UiComponentFactory;
use \Magento\Ui\Component\Listing\Columns\Column;
use \Magento\Catalog\Api\ProductRepositoryInterface;

class Productgrid extends Column

{

    protected $ProductRepositoryInterface;
    public function __construct(
        ContextInterface           $context,
        UiComponentFactory         $uiComponentFactory,
        ProductRepositoryInterface $ProductRepositoryInterface,
        array                      $components = [], array $data = []
    )

    {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->ProductRepositoryInterface = $ProductRepositoryInterface;
    }
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource["data"]["items"])) {
            $fieldName = $this->getData("name");
            foreach ($dataSource["data"]["items"] as $key => $item) {
                $product = $this->ProductRepositoryInterface->getById($item['product_id'], false);
                $url = $product->getUrlModel()->getUrlInStore($product, ['_escape' => true]);
                $html = "<a target='_blank' href=" . $url . ">";
                $html .= "view";
                $html .= "</a>";
                $dataSource["data"]["items"][$key][$fieldName] = $html;
            }
        }
        return $dataSource;
    }
}
