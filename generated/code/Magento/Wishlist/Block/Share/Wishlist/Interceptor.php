<?php
namespace Magento\Wishlist\Block\Share\Wishlist;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Share\Wishlist
 */
class Interceptor extends \Magento\Wishlist\Block\Share\Wishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $httpContext, $customerRepository, $data);
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
