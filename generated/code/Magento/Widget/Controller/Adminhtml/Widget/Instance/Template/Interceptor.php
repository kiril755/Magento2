<?php
namespace Magento\Widget\Controller\Adminhtml\Widget\Instance\Template;

/**
 * Interceptor class for @see \Magento\Widget\Controller\Adminhtml\Widget\Instance\Template
 */
class Interceptor extends \Magento\Widget\Controller\Adminhtml\Widget\Instance\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Widget\Model\Widget\InstanceFactory $widgetFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Math\Random $mathRandom, \Magento\Framework\Translate\InlineInterface $translateInline)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $widgetFactory, $logger, $mathRandom, $translateInline);
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
