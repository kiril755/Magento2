<?php
namespace Magento\User\Model\User;

/**
 * Interceptor class for @see \Magento\User\Model\User
 */
class Interceptor extends \Magento\User\Model\User implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\User\Helper\Data $userData, \Magento\Backend\App\ConfigInterface $config, \Magento\Framework\Validator\DataObjectFactory $validatorObjectFactory, \Magento\Authorization\Model\RoleFactory $roleFactory, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\User\Model\UserValidationRules $validationRules, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\App\DeploymentConfig $deploymentConfig = null, ?\Magento\User\Model\Spi\NotificatorInterface $notificator = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $userData, $config, $validatorObjectFactory, $roleFactory, $transportBuilder, $encryptor, $storeManager, $validationRules, $resource, $resourceCollection, $data, $serializer, $deploymentConfig, $notificator);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function verifyIdentity($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyIdentity');
        return $pluginInfo ? $this->___callPlugins('verifyIdentity', func_get_args(), $pluginInfo) : parent::verifyIdentity($password);
    }

    /**
     * {@inheritdoc}
     */
    public function performIdentityCheck($passwordString)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'performIdentityCheck');
        return $pluginInfo ? $this->___callPlugins('performIdentityCheck', func_get_args(), $pluginInfo) : parent::performIdentityCheck($passwordString);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }
}
