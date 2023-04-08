<?php
namespace Magento\Quote\Model\GuestCart\GuestCartItemRepository;

/**
 * Interceptor class for @see \Magento\Quote\Model\GuestCart\GuestCartItemRepository
 */
class Interceptor extends \Magento\Quote\Model\GuestCart\GuestCartItemRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartItemRepositoryInterface $repository, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory)
    {
        $this->___init();
        parent::__construct($repository, $quoteIdMaskFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartItemInterface $cartItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($cartItem);
    }
}
