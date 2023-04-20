<?php
namespace Magento\Tax\Controller\Adminhtml\Rule\AjaxLoadRates;

/**
 * Interceptor class for @see \Magento\Tax\Controller\Adminhtml\Rule\AjaxLoadRates
 */
class Interceptor extends \Magento\Tax\Controller\Adminhtml\Rule\AjaxLoadRates implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Tax\Model\Rate\Provider $ratesProvider)
    {
        $this->___init();
        parent::__construct($context, $searchCriteriaBuilder, $ratesProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
