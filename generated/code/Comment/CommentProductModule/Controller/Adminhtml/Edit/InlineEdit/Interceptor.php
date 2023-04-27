<?php
namespace Comment\CommentProductModule\Controller\Adminhtml\Edit\InlineEdit;

/**
 * Interceptor class for @see \Comment\CommentProductModule\Controller\Adminhtml\Edit\InlineEdit
 */
class Interceptor extends \Comment\CommentProductModule\Controller\Adminhtml\Edit\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\RequestInterface $request, \Comment\CommentProductModule\Model\CommentFactory $commentFactory)
    {
        $this->___init();
        parent::__construct($jsonFactory, $request, $commentFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : mixed
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
