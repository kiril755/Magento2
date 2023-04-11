<?php
namespace Magento\Checkout\Block\Cart\Coupon;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Coupon
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Coupon implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $data);
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
