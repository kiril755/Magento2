<?php
namespace Magento\Webapi\Controller\Rest\Router\Route;

/**
 * Interceptor class for @see \Magento\Webapi\Controller\Rest\Router\Route
 */
class Interceptor extends \Magento\Webapi\Controller\Rest\Router\Route implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($route = '')
    {
        $this->___init();
        parent::__construct($route);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
