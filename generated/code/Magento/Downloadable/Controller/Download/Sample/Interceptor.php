<?php
namespace Magento\Downloadable\Controller\Download\Sample;

/**
 * Interceptor class for @see \Magento\Downloadable\Controller\Download\Sample
 */
class Interceptor extends \Magento\Downloadable\Controller\Download\Sample implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Downloadable\Model\RelatedProductRetriever $relatedProductRetriever, ?\Magento\Downloadable\Helper\File $file = null, ?\Magento\Downloadable\Model\SampleFactory $sampleFactory = null, ?\Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration = null)
    {
        $this->___init();
        parent::__construct($context, $relatedProductRetriever, $file, $sampleFactory, $stockConfiguration);
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
