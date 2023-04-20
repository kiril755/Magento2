<?php
namespace Magento\Review\Block\Adminhtml\Add\Form;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Add\Form
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Add\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\Review\Helper\Data $reviewData, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $htmlRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $systemStore, $reviewData, $data, $htmlRenderer);
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
