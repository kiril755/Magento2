<?php
namespace Magento\Webapi\Model\Rest\Config;

/**
 * Interceptor class for @see \Magento\Webapi\Model\Rest\Config
 */
class Interceptor extends \Magento\Webapi\Model\Rest\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Webapi\Model\ConfigInterface $config, \Magento\Framework\Controller\Router\Route\Factory $routeFactory)
    {
        $this->___init();
        parent::__construct($config, $routeFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getRestRoutes(\Magento\Framework\Webapi\Rest\Request $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRestRoutes');
        return $pluginInfo ? $this->___callPlugins('getRestRoutes', func_get_args(), $pluginInfo) : parent::getRestRoutes($request);
    }
}
