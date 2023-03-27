<?php
namespace Magento\UrlRewrite\Block\Edit\Form;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Block\Edit\Form
 */
class Interceptor extends \Magento\UrlRewrite\Block\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\UrlRewrite\Model\OptionProvider $optionProvider, \Magento\UrlRewrite\Model\UrlRewriteFactory $rewriteFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\Backend\Helper\Data $adminhtmlData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $optionProvider, $rewriteFactory, $systemStore, $adminhtmlData, $data);
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
