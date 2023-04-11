<?php
namespace Magento\Cms\Controller\Adminhtml\Page\Index;

/**
 * Interceptor class for @see \Magento\Cms\Controller\Adminhtml\Page\Index
 */
class Interceptor extends \Magento\Cms\Controller\Adminhtml\Page\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, ?\Magento\Framework\App\Request\DataPersistorInterface $dataPersistor = null)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $dataPersistor);
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
