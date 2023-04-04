<?php
namespace Magento\Quote\Model\Quote\Address\Item;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Address\Item
 */
class Interceptor extends \Magento\Quote\Model\Quote\Address\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $productRepository, $priceCurrency, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function checkData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkData');
        return $pluginInfo ? $this->___callPlugins('checkData', func_get_args(), $pluginInfo) : parent::checkData();
    }
}
