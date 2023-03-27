<?php
namespace Magento\ProductAlert\Model\ProductSalability;

/**
 * Interceptor class for @see \Magento\ProductAlert\Model\ProductSalability
 */
class Interceptor extends \Magento\ProductAlert\Model\ProductSalability implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable(\Magento\Catalog\Api\Data\ProductInterface $product, \Magento\Store\Api\Data\WebsiteInterface $website) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSalable');
        return $pluginInfo ? $this->___callPlugins('isSalable', func_get_args(), $pluginInfo) : parent::isSalable($product, $website);
    }
}
