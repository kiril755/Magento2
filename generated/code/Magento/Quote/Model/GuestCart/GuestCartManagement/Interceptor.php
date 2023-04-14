<?php
namespace Magento\Quote\Model\GuestCart\GuestCartManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\GuestCart\GuestCartManagement
 */
class Interceptor extends \Magento\Quote\Model\GuestCart\GuestCartManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Quote\Api\CartRepositoryInterface $cartRepository)
    {
        $this->___init();
        parent::__construct($quoteManagement, $quoteIdMaskFactory, $cartRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function createEmptyCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createEmptyCart');
        return $pluginInfo ? $this->___callPlugins('createEmptyCart', func_get_args(), $pluginInfo) : parent::createEmptyCart();
    }

    /**
     * {@inheritdoc}
     */
    public function assignCustomer($cartId, $customerId, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assignCustomer');
        return $pluginInfo ? $this->___callPlugins('assignCustomer', func_get_args(), $pluginInfo) : parent::assignCustomer($cartId, $customerId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function placeOrder($cartId, ?\Magento\Quote\Api\Data\PaymentInterface $paymentMethod = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'placeOrder');
        return $pluginInfo ? $this->___callPlugins('placeOrder', func_get_args(), $pluginInfo) : parent::placeOrder($cartId, $paymentMethod);
    }
}
