<?php
namespace Magento\UrlRewrite\Block\Cms\Page\Edit\Form;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Block\Cms\Page\Edit\Form
 */
class Interceptor extends \Magento\UrlRewrite\Block\Cms\Page\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\UrlRewrite\Model\OptionProvider $optionProvider, \Magento\UrlRewrite\Model\UrlRewriteFactory $rewriteFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\Backend\Helper\Data $adminhtmlData, \Magento\Cms\Model\PageFactory $pageFactory, \Magento\CmsUrlRewrite\Model\CmsPageUrlPathGenerator $cmsPageUrlPathGenerator, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $optionProvider, $rewriteFactory, $systemStore, $adminhtmlData, $pageFactory, $cmsPageUrlPathGenerator, $data);
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
