<?php
namespace Magento\CmsGraphQl\Model\Resolver\Blocks;

/**
 * Interceptor class for @see \Magento\CmsGraphQl\Model\Resolver\Blocks
 */
class Interceptor extends \Magento\CmsGraphQl\Model\Resolver\Blocks implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CmsGraphQl\Model\Resolver\DataProvider\Block $blockDataProvider)
    {
        $this->___init();
        parent::__construct($blockDataProvider);
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
