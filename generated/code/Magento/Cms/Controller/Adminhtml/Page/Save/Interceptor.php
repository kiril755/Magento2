<?php
namespace Magento\Cms\Controller\Adminhtml\Page\Save;

/**
 * Interceptor class for @see \Magento\Cms\Controller\Adminhtml\Page\Save
 */
class Interceptor extends \Magento\Cms\Controller\Adminhtml\Page\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Cms\Controller\Adminhtml\Page\PostDataProcessor $dataProcessor, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, ?\Magento\Cms\Model\PageFactory $pageFactory = null, ?\Magento\Cms\Api\PageRepositoryInterface $pageRepository = null)
    {
        $this->___init();
        parent::__construct($context, $dataProcessor, $dataPersistor, $pageFactory, $pageRepository);
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
