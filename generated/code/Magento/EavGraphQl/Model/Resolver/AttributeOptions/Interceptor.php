<?php
namespace Magento\EavGraphQl\Model\Resolver\AttributeOptions;

/**
 * Interceptor class for @see \Magento\EavGraphQl\Model\Resolver\AttributeOptions
 */
class Interceptor extends \Magento\EavGraphQl\Model\Resolver\AttributeOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\EavGraphQl\Model\Resolver\DataProvider\AttributeOptions $attributeOptionsDataProvider, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory)
    {
        $this->___init();
        parent::__construct($attributeOptionsDataProvider, $valueFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null) : \Magento\Framework\GraphQl\Query\Resolver\Value
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
