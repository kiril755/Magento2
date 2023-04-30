<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Controller\Ajax;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\App\RequestInterface;


class ShowPrice implements HttpPostActionInterface
{

    const EVENT_NAME = 'price_request_event_before';
    /**
     * @var JsonFactory
     * @var ProductRepositoryInterface
     * @var EventManager
     * @var RequestInterface
     */
    private $jsonFactory;
    private $productRepository;
    private $eventManager;
    private $_request;

    /**
     * @param JsonFactory $jsonFactory
     * @param ProductRepositoryInterface $productRepository
     * @param EventManager $eventManager
     * @param RequestInterface $requestinterface
     */
    public function __construct(
        JsonFactory $jsonFactory,
        ProductRepositoryInterface $productRepository,
        EventManager $eventManager,
        RequestInterface $requestInterface
    ) {
        $this->jsonFactory = $jsonFactory;
        $this->productRepository = $productRepository;
        $this->eventManager = $eventManager;
        $this->_request = $requestInterface;
    }


    /**
     * @return Json
     */
    public function execute() : Json
    {
        $this->eventManager->dispatch(__(self::EVENT_NAME));

        $response = $this->jsonFactory->create();
        try {
            $productId = $this->_request->getParam('product_id');

            $product = $this->productRepository->getById($productId);
            $price = $product->getFinalPrice();

            return $response->setData(['price' => $price]);
        } catch (\Exception $e) {
            return $response->setData(['error' => $e->getMessage()]);
        }
    }
}
