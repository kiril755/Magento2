<?php
namespace Magento\DownloadableGraphQl\Resolver\Product\Samples;

/**
 * Interceptor class for @see \Magento\DownloadableGraphQl\Resolver\Product\Samples
 */
class Interceptor extends \Magento\DownloadableGraphQl\Resolver\Product\Samples implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\DownloadableGraphQl\Model\GetDownloadableProductSamples $getDownloadableProductSamples, \Magento\DownloadableGraphQl\Model\ConvertSamplesToArray $convertSamplesToArray)
    {
        $this->___init();
        parent::__construct($getDownloadableProductSamples, $convertSamplesToArray);
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
