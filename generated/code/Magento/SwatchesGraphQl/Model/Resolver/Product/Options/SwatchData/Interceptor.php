<?php
namespace Magento\SwatchesGraphQl\Model\Resolver\Product\Options\SwatchData;

/**
 * Interceptor class for @see \Magento\SwatchesGraphQl\Model\Resolver\Product\Options\SwatchData
 */
class Interceptor extends \Magento\SwatchesGraphQl\Model\Resolver\Product\Options\SwatchData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SwatchesGraphQl\Model\Resolver\Product\Options\DataProvider\SwatchDataProvider $swatchDataProvider)
    {
        $this->___init();
        parent::__construct($swatchDataProvider);
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
