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

$quote = $this->quoteRepository->get($quoteId);

$wishField = $quote->getWishField();
$commentField = $quote->getCommentField();


$order->setWishField($wishField);
$order->setCommentField($commentField);


$this->orderRepository->save($order);
}
}
