<?php
namespace Magento\DirectoryGraphQl\Model\Resolver\Currency;

/**
 * Interceptor class for @see \Magento\DirectoryGraphQl\Model\Resolver\Currency
 */
class Interceptor extends \Magento\DirectoryGraphQl\Model\Resolver\Currency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Reflection\DataObjectProcessor $dataProcessor, \Magento\Directory\Api\CurrencyInformationAcquirerInterface $currencyInformationAcquirer)
    {
        $this->___init();
        parent::__construct($dataProcessor, $currencyInformationAcquirer);
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
