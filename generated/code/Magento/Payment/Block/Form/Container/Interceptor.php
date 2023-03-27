<?php
namespace Magento\Payment\Block\Form\Container;

/**
 * Interceptor class for @see \Magento\Payment\Block\Form\Container
 */
class Interceptor extends \Magento\Payment\Block\Form\Container implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Payment\Model\Checks\SpecificationFactory $methodSpecificationFactory, array $data = [], array $additionalChecks = [])
    {
        $this->___init();
        parent::__construct($context, $paymentHelper, $methodSpecificationFactory, $data, $additionalChecks);
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
