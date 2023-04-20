<?php
namespace Magento\MediaGalleryUi\Controller\Adminhtml\Directories\GetTree;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Controller\Adminhtml\Directories\GetTree
 */
class Interceptor extends \Magento\MediaGalleryUi\Controller\Adminhtml\Directories\GetTree implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\MediaGalleryUi\Model\Directories\GetDirectoryTree $getDirectoryTree)
    {
        $this->___init();
        parent::__construct($context, $logger, $getDirectoryTree);
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
