<?php
namespace Magento\Wishlist\Controller\Shared\Allcart;

/**
 * Interceptor class for @see \Magento\Wishlist\Controller\Shared\Allcart
 */
class Interceptor extends \Magento\Wishlist\Controller\Shared\Allcart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Wishlist\Controller\Shared\WishlistProvider $wishlistProvider, \Magento\Wishlist\Model\ItemCarrier $itemCarrier)
    {
        $this->___init();
        parent::__construct($context, $wishlistProvider, $itemCarrier);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
