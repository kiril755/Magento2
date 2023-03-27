<?php
namespace Magento\Catalog\Block\Product\Compare\ListCompare;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\Compare\ListCompare
 */
class Interceptor extends \Magento\Catalog\Block\Product\Compare\ListCompare implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Catalog\Model\ResourceModel\Product\Compare\Item\CollectionFactory $itemCollectionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Customer\Model\Visitor $customerVisitor, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $urlEncoder, $itemCollectionFactory, $catalogProductVisibility, $customerVisitor, $httpContext, $currentCustomer, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
