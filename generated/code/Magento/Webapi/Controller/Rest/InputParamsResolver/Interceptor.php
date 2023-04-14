<?php
namespace Magento\Webapi\Controller\Rest\InputParamsResolver;

/**
 * Interceptor class for @see \Magento\Webapi\Controller\Rest\InputParamsResolver
 */
class Interceptor extends \Magento\Webapi\Controller\Rest\InputParamsResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Webapi\Rest\Request $request, \Magento\Webapi\Controller\Rest\ParamsOverrider $paramsOverrider, \Magento\Framework\Webapi\ServiceInputProcessor $serviceInputProcessor, \Magento\Webapi\Controller\Rest\Router $router, \Magento\Webapi\Controller\Rest\RequestValidator $requestValidator, ?\Magento\Framework\Reflection\MethodsMap $methodsMap = null, ?\Magento\Framework\Webapi\Validator\EntityArrayValidator\InputArraySizeLimitValue $inputArraySizeLimitValue = null)
    {
        $this->___init();
        parent::__construct($request, $paramsOverrider, $serviceInputProcessor, $router, $requestValidator, $methodsMap, $inputArraySizeLimitValue);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve();
    }
}
