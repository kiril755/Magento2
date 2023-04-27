<?php
declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Controller\Adminhtml\Edit;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Task\PriceVisibilityRestriction\Model\UserRequestFactory;

class InlineEdit implements HttpPostActionInterface
{
    /**
     * @var JsonFactory
     * @var RequestInterface
     * @var UserRequestFactory
     */
    private $jsonFactory;
    private $_request;
    private $userRequestFactory;

    /**
     * @param JsonFactory $jsonFactory
     * @param RequestInterface $request
     * @param UserRequestFactory $userRequestFactory
     */
    public function __construct(
        JsonFactory        $jsonFactory,
        RequestInterface $request,
        UserRequestFactory $userRequestFactory
    )
    {
        $this->jsonFactory = $jsonFactory;
        $this->_request = $request;
        $this->userRequestFactory = $userRequestFactory;
    }

    /**
     * @return mixed
     */
    public function execute() : mixed
    {
        $resultJson = $this->jsonFactory->create();
        $error = false;
        $messages = [];

        if ($this->_request->getParam('isAjax')) {
            $postItems = $this->_request->getParam('items', []);
            foreach (array_keys($postItems) as $entityId) {
                $model = $this->userRequestFactory->create()->load($entityId);
                try {
                    $model->setData(array_merge($model->getData(), $postItems[$entityId]));
                    $model->save();
                } catch (\Exception $e) {
                    $messages[] = "[Error:]  {$e->getMessage()}";
                    $error = true;
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
