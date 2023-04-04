<?php
namespace Magento\Framework\View\Layout;

/**
 * Interceptor class for @see \Magento\Framework\View\Layout
 */
class Interceptor extends \Magento\Framework\View\Layout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Layout\ProcessorFactory $processorFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\View\Layout\Data\Structure $structure, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\View\Design\Theme\ResolverInterface $themeResolver, \Magento\Framework\View\Layout\ReaderPool $readerPool, \Magento\Framework\View\Layout\GeneratorPool $generatorPool, \Magento\Framework\Cache\FrontendInterface $cache, \Magento\Framework\View\Layout\Reader\ContextFactory $readerContextFactory, \Magento\Framework\View\Layout\Generator\ContextFactory $generatorContextFactory, \Magento\Framework\App\State $appState, \Psr\Log\LoggerInterface $logger, $cacheable = true, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null, ?int $cacheLifetime = null)
    {
        $this->___init();
        parent::__construct($processorFactory, $eventManager, $structure, $messageManager, $themeResolver, $readerPool, $generatorPool, $cache, $readerContextFactory, $generatorContextFactory, $appState, $logger, $cacheable, $serializer, $cacheLifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function generateXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateXml');
        return $pluginInfo ? $this->___callPlugins('generateXml', func_get_args(), $pluginInfo) : parent::generateXml();
    }

    /**
     * {@inheritdoc}
     */
    public function generateElements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateElements');
        return $pluginInfo ? $this->___callPlugins('generateElements', func_get_args(), $pluginInfo) : parent::generateElements();
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOutput');
        return $pluginInfo ? $this->___callPlugins('getOutput', func_get_args(), $pluginInfo) : parent::getOutput();
    }
}
