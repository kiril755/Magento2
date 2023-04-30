<?php
declare(strict_types=1);

namespace Comment\CommentProductModule\Controller\Adminhtml\Edit;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\RequestInterface;
use Comment\CommentProductModule\Model\CommentFactory;

class InlineEdit implements HttpPostActionInterface
{
    /**
     * @var JsonFactory
     * @var RequestInterface
     * @var CommentFactory
     */
    private $jsonFactory;
    private $_request;
    private $commentFactory;
    /**
     * @param JsonFactory $jsonFactory
     * @param RequestInterface $request
     * @param CommentFactory $commentFactory
     */
    public function __construct(
        JsonFactory $jsonFactory,
        RequestInterface $request,
        CommentFactory $commentFactory
    ) {
        $this->jsonFactory = $jsonFactory;
        $this->_request = $request;
        $this->commentFactory = $commentFactory;
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
                $model = $this->commentFactory->create()->load($entityId);
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
