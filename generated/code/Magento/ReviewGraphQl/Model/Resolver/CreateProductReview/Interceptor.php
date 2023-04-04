<?php
namespace Magento\ReviewGraphQl\Model\Resolver\CreateProductReview;

/**
 * Interceptor class for @see \Magento\ReviewGraphQl\Model\Resolver\CreateProductReview
 */
class Interceptor extends \Magento\ReviewGraphQl\Model\Resolver\CreateProductReview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ReviewGraphQl\Model\Review\AddReviewToProduct $addReviewToProduct, \Magento\ReviewGraphQl\Mapper\ReviewDataMapper $reviewDataMapper, \Magento\Review\Helper\Data $reviewHelper, \Magento\Review\Model\Review\Config $reviewsConfig)
    {
        $this->___init();
        parent::__construct($addReviewToProduct, $reviewDataMapper, $reviewHelper, $reviewsConfig);
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
