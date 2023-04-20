<?php
namespace Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content;

/**
 * Interceptor class for @see \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content
 */
class Interceptor extends \Magento\Cms\Block\Adminhtml\Wysiwyg\Images\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        return $pluginInfo ? $this->___callPlugins('setLayout', func_get_args(), $pluginInfo) : parent::setLayout($layout);
    }
}
