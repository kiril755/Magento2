<?php
namespace Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\Css;

/**
 * Interceptor class for @see \Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\Css
 */
class Interceptor extends \Magento\Theme\Block\Adminhtml\System\Design\Theme\Edit\Tab\Css implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Theme\Model\Uploader\Service $uploaderService, \Magento\Framework\Encryption\UrlCoder $urlCoder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $objectManager, $uploaderService, $urlCoder, $data);
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
