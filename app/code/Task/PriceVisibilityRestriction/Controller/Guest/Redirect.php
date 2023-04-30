<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Controller\Guest;

use Magento\Framework\App\ActionInterface;
use Magento\Customer\Model\Session;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\Controller\Result\RedirectFactory;

class Redirect implements ActionInterface
{
    const EVENT_NAME = 'price_request_event_before';
    const PATH = 'customer/account/login';
    /**
     * @var Session
     * @var EventManager
     * @var RedirectFactory
     */
    private $customerSession;
    private $eventManager;
    private $redirectFactory;

    /**
     * @param Session $customerSession
     * @param EventManager $eventManager
     * @param RedirectFactory $redirectFactory
     */
    public function __construct(
        Session $customerSession,
        EventManager $eventManager,
        RedirectFactory $redirectFactory
    )
    {
        $this->customerSession = $customerSession;
        $this->eventManager = $eventManager;
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute() : \Magento\Framework\Controller\Result\Redirect
    {
        $path = '';
        if (!$this->customerSession->isLoggedIn()) {
            $this->eventManager->dispatch(__(self::EVENT_NAME));
            $path = self::PATH;
        }
        return $this->redirectFactory->create()->setPath($path);
    }

}
