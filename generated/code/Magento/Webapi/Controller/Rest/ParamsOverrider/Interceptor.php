<?php
namespace Magento\Webapi\Controller\Rest\ParamsOverrider;

/**
 * Interceptor class for @see \Magento\Webapi\Controller\Rest\ParamsOverrider
 */
class Interceptor extends \Magento\Webapi\Controller\Rest\ParamsOverrider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $paramOverriders = [], ?\Magento\Framework\Api\SimpleDataObjectConverter $dataObjectConverter = null)
    {
        $this->___init();
        parent::__construct($paramOverriders, $dataObjectConverter);
    }

    /**
     * {@inheritdoc}
     */
    public function override(array $inputData, array $parameters)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'override');
        return $pluginInfo ? $this->___callPlugins('override', func_get_args(), $pluginInfo) : parent::override($inputData, $parameters);
    }
}
