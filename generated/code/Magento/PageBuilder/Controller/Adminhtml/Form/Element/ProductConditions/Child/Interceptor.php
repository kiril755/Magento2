<?php
namespace Magento\PageBuilder\Controller\Adminhtml\Form\Element\ProductConditions\Child;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\Form\Element\ProductConditions\Child
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\Form\Element\ProductConditions\Child implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\CatalogWidget\Model\Rule $rule)
    {
        $this->___init();
        parent::__construct($context, $rule);
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
