<?php
declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Controller\Adminhtml\Edit;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Task\PriceVisibilityRestriction\Model\UserRequestFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;

class InlineEdit implements HttpPostActionInterface
{
    /**
     * @var JsonFactory
     * @var RequestInterface
     * @var UserRequestFactory
     * @var EventManager
     */
    private $jsonFactory;
    private $_request;
    private $userRequestFactory;
    private $eventManager;

    /**
     * @param JsonFactory $jsonFactory
     * @param RequestInterface $request
     * @param UserRequestFactory $userRequestFactory
     * @param EventManager $eventManager
     */
    public function __construct(
        JsonFactory        $jsonFactory,
        RequestInterface $request,
        UserRequestFactory $userRequestFactory,
        EventManager $eventManager
    )
    {
        $this->jsonFactory = $jsonFactory;
        $this->_request = $request;
        $this->userRequestFactory = $userRequestFactory;
        $this->eventManager = $eventManager;
    }

    /**
     * @return Json
     */
    public function execute() : Json
    {
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];

        if ($this->_request->isAjax()) {
            $postItems = $this->_request->getParam('items', []);
            foreach (array_keys($postItems) as $entityId) {
                $model = $this->userRequestFactory->create()->load($entityId);
                try {
                    $model->setData(array_merge($model->getData(), $postItems[$entityId]));
                    $model->save();
                    $this->eventManager->dispatch('success_edit_log', ['object' => $model]);
                } catch (\Exception $e) {
                    $messages[] = "[Error:] {$e->getMessage()}";
                    $error = true;
                    $this->eventManager->dispatch('error_edit_log', ['object' => $e->getMessage()]);
                }
            }
        }
        return $resultJson->setData(
            [
                'messages' => $messages,
                'error' => $error,
            ]
        );
    }
}
