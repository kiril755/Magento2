<?php
namespace Magento\MediaGalleryUi\Controller\Adminhtml\Index\Index;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Controller\Adminhtml\Index\Index
 */
class Interceptor extends \Magento\MediaGalleryUi\Controller\Adminhtml\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\LayoutFactory $layoutFactory)
    {
        $this->___init();
        parent::__construct($context, $layoutFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\View\Result\Layout
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
