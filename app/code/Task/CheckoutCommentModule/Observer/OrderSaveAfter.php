<?php
namespace Task\CheckoutCommentModule\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer as EventObserver;

class OrderSaveAfter implements ObserverInterface
{
protected $quoteRepository;
protected $orderRepository;

public function __construct(
\Magento\Quote\Model\QuoteRepository $quoteRepository,
\Magento\Sales\Model\OrderRepository $orderRepository
) {
$this->quoteRepository = $quoteRepository;
$this->orderRepository = $orderRepository;
}

public function execute(EventObserver $observer)
{
$order = $observer->getOrder();
$quoteId = $order->getQuoteId();

// Load the quote object
$quote = $this->quoteRepository->get($quoteId);

// Get the value of the 'wish_field' extension attribute
$wishField = $quote->getWishField();

// Set the value of the 'wish_field' attribute on the order object
$order->setWishField($wishField);

// Save the order object
$this->orderRepository->save($order);
}
}
