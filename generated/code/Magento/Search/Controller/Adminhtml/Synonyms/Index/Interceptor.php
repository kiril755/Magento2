<?php
namespace Magento\Search\Controller\Adminhtml\Synonyms\Index;

/**
 * Interceptor class for @see \Magento\Search\Controller\Adminhtml\Synonyms\Index
 */
class Interceptor extends \Magento\Search\Controller\Adminhtml\Synonyms\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Search\Controller\Adminhtml\Synonyms\ResultPageBuilder $pageBuilder)
    {
        $this->___init();
        parent::__construct($context, $pageBuilder);
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
