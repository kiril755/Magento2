<?php
namespace Magento\Paypal\Block\Adminhtml\Settlement\Details\Form;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\Settlement\Details\Form
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\Settlement\Details\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Paypal\Model\Report\Settlement $settlement, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $settlement, $localeCurrency, $data);
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
