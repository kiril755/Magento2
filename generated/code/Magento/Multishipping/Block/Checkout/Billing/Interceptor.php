<?php
namespace Magento\Multishipping\Block\Checkout\Billing;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Billing
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Billing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Payment\Model\Checks\SpecificationFactory $methodSpecificationFactory, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Payment\Model\Method\SpecificationInterface $paymentSpecification, array $data = [], array $additionalChecks = [])
    {
        $this->___init();
        parent::__construct($context, $paymentHelper, $methodSpecificationFactory, $multishipping, $checkoutSession, $paymentSpecification, $data, $additionalChecks);
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
