<?php
namespace Magento\Captcha\Observer\ResetAttemptForBackendObserver;

/**
 * Interceptor class for @see \Magento\Captcha\Observer\ResetAttemptForBackendObserver
 */
class Interceptor extends \Magento\Captcha\Observer\ResetAttemptForBackendObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Captcha\Model\ResourceModel\LogFactory $resLogFactory)
    {
        $this->___init();
        parent::__construct($resLogFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}
