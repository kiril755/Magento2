<?php
namespace Magento\Sales\Model\Order\Validation\CanInvoice;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Validation\CanInvoice
 */
class Interceptor extends \Magento\Sales\Model\Order\Validation\CanInvoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($entity);
    }
}
