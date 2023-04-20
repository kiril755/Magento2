<?php
namespace Magento\CheckoutAgreementsGraphQl\Model\Resolver\CheckoutAgreements;

/**
 * Interceptor class for @see \Magento\CheckoutAgreementsGraphQl\Model\Resolver\CheckoutAgreements
 */
class Interceptor extends \Magento\CheckoutAgreementsGraphQl\Model\Resolver\CheckoutAgreements implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CheckoutAgreements\Model\ResourceModel\Agreement\CollectionFactory $agreementCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($agreementCollectionFactory, $storeManager, $scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
