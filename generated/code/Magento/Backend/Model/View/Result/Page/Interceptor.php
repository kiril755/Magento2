<?php
namespace Magento\Backend\Model\View\Result\Page;

/**
 * Interceptor class for @see \Magento\Backend\Model\View\Result\Page
 */
class Interceptor extends \Magento\Backend\Model\View\Result\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\View\Layout\ReaderPool $layoutReaderPool, \Magento\Framework\Translate\InlineInterface $translateInline, \Magento\Framework\View\Layout\BuilderFactory $layoutBuilderFactory, \Magento\Framework\View\Layout\GeneratorPool $generatorPool, \Magento\Framework\View\Page\Config\RendererFactory $pageConfigRendererFactory, \Magento\Framework\View\Page\Layout\Reader $pageLayoutReader, $template, $isIsolated = false, ?\Magento\Framework\View\EntitySpecificHandlesList $entitySpecificHandlesList = null)
    {
        $this->___init();
        parent::__construct($context, $layoutFactory, $layoutReaderPool, $translateInline, $layoutBuilderFactory, $generatorPool, $pageConfigRendererFactory, $pageLayoutReader, $template, $isIsolated, $entitySpecificHandlesList);
    }

    /**
     * {@inheritdoc}
     */
    public function addDefaultHandle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addDefaultHandle');
        return $pluginInfo ? $this->___callPlugins('addDefaultHandle', func_get_args(), $pluginInfo) : parent::addDefaultHandle();
    }

    /**
     * {@inheritdoc}
     */
    public function renderResult(\Magento\Framework\App\ResponseInterface $httpResponse)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderResult');
        return $pluginInfo ? $this->___callPlugins('renderResult', func_get_args(), $pluginInfo) : parent::renderResult($httpResponse);
    }
}
