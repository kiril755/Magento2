<?php
namespace Comment\CommentProductModule\Controller\Form\Submit;

/**
 * Interceptor class for @see \Comment\CommentProductModule\Controller\Form\Submit
 */
class Interceptor extends \Comment\CommentProductModule\Controller\Form\Submit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Comment\CommentProductModule\Model\CommentFactory $commentFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Controller\ResultFactory $resultFactory)
    {
        $this->___init();
        parent::__construct($context, $commentFactory, $eventManager, $resultFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
