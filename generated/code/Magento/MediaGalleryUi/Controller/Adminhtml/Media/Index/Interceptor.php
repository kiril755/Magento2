<?php
namespace Magento\MediaGalleryUi\Controller\Adminhtml\Media\Index;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Controller\Adminhtml\Media\Index
 */
class Interceptor extends \Magento\MediaGalleryUi\Controller\Adminhtml\Media\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\MediaContentApi\Model\Config $config)
    {
        $this->___init();
        parent::__construct($context, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
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
