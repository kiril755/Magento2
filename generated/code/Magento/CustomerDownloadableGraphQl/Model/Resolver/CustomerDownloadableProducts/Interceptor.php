<?php
namespace Magento\CustomerDownloadableGraphQl\Model\Resolver\CustomerDownloadableProducts;

/**
 * Interceptor class for @see \Magento\CustomerDownloadableGraphQl\Model\Resolver\CustomerDownloadableProducts
 */
class Interceptor extends \Magento\CustomerDownloadableGraphQl\Model\Resolver\CustomerDownloadableProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\DownloadableGraphQl\Model\ResourceModel\GetPurchasedDownloadableProducts $getPurchasedDownloadableProducts, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($getPurchasedDownloadableProducts, $urlBuilder);
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
