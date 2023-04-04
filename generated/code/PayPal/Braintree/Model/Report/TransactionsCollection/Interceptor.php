<?php
namespace PayPal\Braintree\Model\Report\TransactionsCollection;

/**
 * Interceptor class for @see \PayPal\Braintree\Model\Report\TransactionsCollection
 */
class Interceptor extends \PayPal\Braintree\Model\Report\TransactionsCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \PayPal\Braintree\Model\Adapter\BraintreeAdapter $braintreeAdapter, \PayPal\Braintree\Model\Report\FilterMapper $filterMapper)
    {
        $this->___init();
        parent::__construct($entityFactory, $braintreeAdapter, $filterMapper);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
