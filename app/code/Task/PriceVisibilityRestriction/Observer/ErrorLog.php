<?php
declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class ErrorLog implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer) : void
    {
        if (!($observer instanceof Observer)) {
            return;
        }
        $this->logger->error($observer->getEvent()->getObject());
    }
}
