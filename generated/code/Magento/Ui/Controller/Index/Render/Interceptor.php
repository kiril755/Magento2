<?php
namespace Magento\Ui\Controller\Index\Render;

/**
 * Interceptor class for @see \Magento\Ui\Controller\Index\Render
 */
class Interceptor extends \Magento\Ui\Controller\Index\Render implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, ?\Magento\Ui\Model\UiComponentTypeResolver $contentTypeResolver = null, ?\Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory = null, ?\Magento\Framework\Escaper $escaper = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $contentTypeResolver, $resultJsonFactory, $escaper, $logger);
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
