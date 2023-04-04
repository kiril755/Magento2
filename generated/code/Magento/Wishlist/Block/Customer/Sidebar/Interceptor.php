<?php
namespace Magento\Wishlist\Block\Customer\Sidebar;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Customer\Sidebar
 */
class Interceptor extends \Magento\Wishlist\Block\Customer\Sidebar implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\App\Http\Context $httpContext, array $data = [], ?\Magento\Framework\View\ConfigInterface $config = null, ?\Magento\Catalog\Model\Product\Image\UrlBuilder $urlBuilder = null)
    {
        $this->___init();
        parent::__construct($context, $httpContext, $data, $config, $urlBuilder);
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
