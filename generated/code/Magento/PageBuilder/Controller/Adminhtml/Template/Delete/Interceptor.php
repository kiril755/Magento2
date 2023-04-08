<?php
namespace Magento\PageBuilder\Controller\Adminhtml\Template\Delete;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\Template\Delete
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\Template\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\PageBuilder\Api\TemplateRepositoryInterface $templateRepository)
    {
        $this->___init();
        parent::__construct($context, $logger, $templateRepository);
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
