<?php
namespace Magento\Framework\Filter\Template;

/**
 * Interceptor class for @see \Magento\Framework\Filter\Template
 */
class Interceptor extends \Magento\Framework\Filter\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, $variables = [], $directiveProcessors = [], ?\Magento\Framework\Filter\VariableResolverInterface $variableResolver = null, ?\Magento\Framework\Filter\Template\SignatureProvider $signatureProvider = null, ?\Magento\Framework\Filter\Template\FilteringDepthMeter $filteringDepthMeter = null)
    {
        $this->___init();
        parent::__construct($string, $variables, $directiveProcessors, $variableResolver, $signatureProvider, $filteringDepthMeter);
    }

    /**
     * {@inheritdoc}
     */
    public function setVariables(array $variables)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVariables');
        return $pluginInfo ? $this->___callPlugins('setVariables', func_get_args(), $pluginInfo) : parent::setVariables($variables);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateProcessor(callable $callback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateProcessor');
        return $pluginInfo ? $this->___callPlugins('setTemplateProcessor', func_get_args(), $pluginInfo) : parent::setTemplateProcessor($callback);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateProcessor()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateProcessor');
        return $pluginInfo ? $this->___callPlugins('getTemplateProcessor', func_get_args(), $pluginInfo) : parent::getTemplateProcessor();
    }

    /**
     * {@inheritdoc}
     */
    public function filter($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        return $pluginInfo ? $this->___callPlugins('filter', func_get_args(), $pluginInfo) : parent::filter($value);
    }

    /**
     * {@inheritdoc}
     */
    public function addAfterFilterCallback(callable $afterFilterCallback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAfterFilterCallback');
        return $pluginInfo ? $this->___callPlugins('addAfterFilterCallback', func_get_args(), $pluginInfo) : parent::addAfterFilterCallback($afterFilterCallback);
    }

    /**
     * {@inheritdoc}
     */
    public function varDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'varDirective');
        return $pluginInfo ? $this->___callPlugins('varDirective', func_get_args(), $pluginInfo) : parent::varDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function forDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'forDirective');
        return $pluginInfo ? $this->___callPlugins('forDirective', func_get_args(), $pluginInfo) : parent::forDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function templateDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'templateDirective');
        return $pluginInfo ? $this->___callPlugins('templateDirective', func_get_args(), $pluginInfo) : parent::templateDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function dependDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dependDirective');
        return $pluginInfo ? $this->___callPlugins('dependDirective', func_get_args(), $pluginInfo) : parent::dependDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function ifDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'ifDirective');
        return $pluginInfo ? $this->___callPlugins('ifDirective', func_get_args(), $pluginInfo) : parent::ifDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function setStrictMode(bool $strictMode) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStrictMode');
        return $pluginInfo ? $this->___callPlugins('setStrictMode', func_get_args(), $pluginInfo) : parent::setStrictMode($strictMode);
    }

    /**
     * {@inheritdoc}
     */
    public function isStrictMode() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStrictMode');
        return $pluginInfo ? $this->___callPlugins('isStrictMode', func_get_args(), $pluginInfo) : parent::isStrictMode();
    }
}
