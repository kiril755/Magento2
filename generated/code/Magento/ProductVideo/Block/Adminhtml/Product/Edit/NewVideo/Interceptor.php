<?php
namespace Magento\ProductVideo\Block\Adminhtml\Product\Edit\NewVideo;

/**
 * Interceptor class for @see \Magento\ProductVideo\Block\Adminhtml\Product\Edit\NewVideo
 */
class Interceptor extends \Magento\ProductVideo\Block\Adminhtml\Product\Edit\NewVideo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\ProductVideo\Helper\Media $mediaHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $mediaHelper, $jsonEncoder, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
