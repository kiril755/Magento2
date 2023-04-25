<?php
namespace Task\PriceVisibilityRestriction\Controller\Ajax;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;

//use Magento\Catalog\Model\Product;


class ShowPrice extends \Magento\Framework\App\Action\Action
{
    protected $jsonFactory;
    protected $productRepository;
    protected $eventManager;


    public function __construct(
        Context $context,
        JsonFactory $jsonFactory,
        ProductRepositoryInterface $productRepository,
        EventManager $eventManager
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->productRepository = $productRepository;
        $this->eventManager = $eventManager;
    }

    public function execute()
    {
        $this->eventManager->dispatch('price_request_event_before');

        $productId = $this->getRequest()->getParam('product_id');

        $product = $this->productRepository->getById($productId);
        $price = $product->getFinalPrice();

        $response = $this->jsonFactory->create();
        $response->setData(['price' => $price, 'product_id' => $productId, 'product' => $product]);
        return $response;
    }
}
