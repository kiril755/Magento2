<?php
namespace Magento\Customer\Model\EmailNotification;

/**
 * Interceptor class for @see \Magento\Customer\Model\EmailNotification
 */
class Interceptor extends \Magento\Customer\Model\EmailNotification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\CustomerRegistry $customerRegistry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Customer\Helper\View $customerViewHelper, \Magento\Framework\Reflection\DataObjectProcessor $dataProcessor, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, ?\Magento\Framework\Mail\Template\SenderResolverInterface $senderResolver = null, ?\Magento\Store\Model\App\Emulation $emulation = null, ?\Magento\Customer\Model\AccountConfirmation $accountConfirmation = null)
    {
        $this->___init();
        parent::__construct($customerRegistry, $storeManager, $transportBuilder, $customerViewHelper, $dataProcessor, $scopeConfig, $senderResolver, $emulation, $accountConfirmation);
    }

    /**
     * {@inheritdoc}
     */
    public function credentialsChanged(\Magento\Customer\Api\Data\CustomerInterface $savedCustomer, $origCustomerEmail, $isPasswordChanged = false) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'credentialsChanged');
        $pluginInfo ? $this->___callPlugins('credentialsChanged', func_get_args(), $pluginInfo) : parent::credentialsChanged($savedCustomer, $origCustomerEmail, $isPasswordChanged);
    }

    /**
     * {@inheritdoc}
     */
    public function passwordReminder(\Magento\Customer\Api\Data\CustomerInterface $customer) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'passwordReminder');
        $pluginInfo ? $this->___callPlugins('passwordReminder', func_get_args(), $pluginInfo) : parent::passwordReminder($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function passwordResetConfirmation(\Magento\Customer\Api\Data\CustomerInterface $customer) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'passwordResetConfirmation');
        $pluginInfo ? $this->___callPlugins('passwordResetConfirmation', func_get_args(), $pluginInfo) : parent::passwordResetConfirmation($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function newAccount(\Magento\Customer\Api\Data\CustomerInterface $customer, $type = 'registered', $backUrl = '', $storeId = null, $sendemailStoreId = null) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'newAccount');
        $pluginInfo ? $this->___callPlugins('newAccount', func_get_args(), $pluginInfo) : parent::newAccount($customer, $type, $backUrl, $storeId, $sendemailStoreId);
    }
}
