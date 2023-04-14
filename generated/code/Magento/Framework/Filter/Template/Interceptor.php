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
    public function filter($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        return $pluginInfo ? $this->___callPlugins('filter', func_get_args(), $pluginInfo) : parent::filter($value);
    }
}
