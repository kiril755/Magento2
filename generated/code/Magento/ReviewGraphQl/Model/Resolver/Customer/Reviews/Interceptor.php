<?php
namespace Magento\ReviewGraphQl\Model\Resolver\Customer\Reviews;

/**
 * Interceptor class for @see \Magento\ReviewGraphQl\Model\Resolver\Customer\Reviews
 */
class Interceptor extends \Magento\ReviewGraphQl\Model\Resolver\Customer\Reviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ReviewGraphQl\Model\DataProvider\CustomerReviewsDataProvider $customerReviewsDataProvider, \Magento\ReviewGraphQl\Model\DataProvider\AggregatedReviewsDataProvider $aggregatedReviewsDataProvider)
    {
        $this->___init();
        parent::__construct($customerReviewsDataProvider, $aggregatedReviewsDataProvider);
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
