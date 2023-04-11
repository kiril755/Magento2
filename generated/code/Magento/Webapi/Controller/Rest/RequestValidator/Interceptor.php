<?php
namespace Magento\Webapi\Controller\Rest\RequestValidator;

/**
 * Interceptor class for @see \Magento\Webapi\Controller\Rest\RequestValidator
 */
class Interceptor extends \Magento\Webapi\Controller\Rest\RequestValidator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Webapi\Rest\Request $request, \Magento\Webapi\Controller\Rest\Router $router, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Webapi\Authorization $authorization)
    {
        $this->___init();
        parent::__construct($request, $router, $storeManager, $authorization);
    }

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate();
    }
}
