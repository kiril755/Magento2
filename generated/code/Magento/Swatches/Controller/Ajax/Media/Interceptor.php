<?php
namespace Magento\Swatches\Controller\Ajax\Media;

/**
 * Interceptor class for @see \Magento\Swatches\Controller\Ajax\Media
 */
class Interceptor extends \Magento\Swatches\Controller\Ajax\Media implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Model\ProductFactory $productModelFactory, \Magento\Swatches\Helper\Data $swatchHelper, \Magento\PageCache\Model\Config $config)
    {
        $this->___init();
        parent::__construct($context, $productModelFactory, $swatchHelper, $config);
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
