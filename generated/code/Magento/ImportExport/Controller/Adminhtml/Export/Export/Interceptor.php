<?php
namespace Magento\ImportExport\Controller\Adminhtml\Export\Export;

/**
 * Interceptor class for @see \Magento\ImportExport\Controller\Adminhtml\Export\Export
 */
class Interceptor extends \Magento\ImportExport\Controller\Adminhtml\Export\Export implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, ?\Magento\Framework\Session\SessionManagerInterface $sessionManager = null, ?\Magento\Framework\MessageQueue\PublisherInterface $publisher = null, ?\Magento\ImportExport\Model\Export\Entity\ExportInfoFactory $exportInfoFactory = null, ?\Magento\Framework\Locale\ResolverInterface $localeResolver = null)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $sessionManager, $publisher, $exportInfoFactory, $localeResolver);
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
