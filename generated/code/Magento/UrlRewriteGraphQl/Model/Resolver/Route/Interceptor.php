<?php
namespace Magento\UrlRewriteGraphQl\Model\Resolver\Route;

/**
 * Interceptor class for @see \Magento\UrlRewriteGraphQl\Model\Resolver\Route
 */
class Interceptor extends \Magento\UrlRewriteGraphQl\Model\Resolver\Route implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite\CustomUrlLocatorInterface $customUrlLocator, \Magento\UrlRewriteGraphQl\Model\DataProvider\EntityDataProviderComposite $entityDataProviderComposite, \Magento\Framework\GraphQl\Query\Uid $idEncoder)
    {
        $this->___init();
        parent::__construct($urlFinder, $customUrlLocator, $entityDataProviderComposite, $idEncoder);
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
