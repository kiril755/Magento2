<?php
namespace Magento\Customer\CustomerData\Customer;

/**
 * Interceptor class for @see \Magento\Customer\CustomerData\Customer
 */
class Interceptor extends \Magento\Customer\CustomerData\Customer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Customer\Helper\View $customerViewHelper)
    {
        $this->___init();
        parent::__construct($currentCustomer, $customerViewHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSectionData');
        return $pluginInfo ? $this->___callPlugins('getSectionData', func_get_args(), $pluginInfo) : parent::getSectionData();
    }
}
