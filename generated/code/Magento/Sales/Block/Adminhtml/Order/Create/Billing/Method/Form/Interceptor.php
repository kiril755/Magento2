<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Payment\Model\Checks\SpecificationFactory $methodSpecificationFactory, \Magento\Backend\Model\Session\Quote $sessionQuote, array $data = [], array $additionalChecks = [])
    {
        $this->___init();
        parent::__construct($context, $paymentHelper, $methodSpecificationFactory, $sessionQuote, $data, $additionalChecks);
    }

    /**
     * {@inheritdoc}
     */
    public function getMethods()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethods');
        return $pluginInfo ? $this->___callPlugins('getMethods', func_get_args(), $pluginInfo) : parent::getMethods();
    }
}
