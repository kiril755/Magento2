<?php
namespace Magento\Webapi\Controller\Soap\Request\Handler;

/**
 * Interceptor class for @see \Magento\Webapi\Controller\Soap\Request\Handler
 */
class Interceptor extends \Magento\Webapi\Controller\Soap\Request\Handler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Webapi\Request $request, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Webapi\Model\Soap\Config $apiConfig, \Magento\Framework\Webapi\Authorization $authorization, \Magento\Framework\Api\SimpleDataObjectConverter $dataObjectConverter, \Magento\Framework\Webapi\ServiceInputProcessor $serviceInputProcessor, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Framework\Reflection\MethodsMap $methodsMapProcessor, ?\Magento\Webapi\Controller\Rest\ParamsOverrider $paramsOverrider = null, ?\Magento\Framework\Webapi\Validator\EntityArrayValidator\InputArraySizeLimitValue $inputArraySizeLimitValue = null)
    {
        $this->___init();
        parent::__construct($request, $objectManager, $apiConfig, $authorization, $dataObjectConverter, $serviceInputProcessor, $dataObjectProcessor, $methodsMapProcessor, $paramsOverrider, $inputArraySizeLimitValue);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($operation, $arguments)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($operation, $arguments);
    }
}
