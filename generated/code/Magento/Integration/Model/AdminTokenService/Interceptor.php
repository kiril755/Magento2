<?php
namespace Magento\Integration\Model\AdminTokenService;

/**
 * Interceptor class for @see \Magento\Integration\Model\AdminTokenService
 */
class Interceptor extends \Magento\Integration\Model\AdminTokenService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\Oauth\TokenFactory $tokenModelFactory, \Magento\User\Model\User $userModel, \Magento\Integration\Model\ResourceModel\Oauth\Token\CollectionFactory $tokenModelCollectionFactory, \Magento\Integration\Model\CredentialsValidator $validatorHelper, ?\Magento\Integration\Model\UserToken\UserTokenParametersFactory $tokenParamsFactory = null, ?\Magento\Integration\Api\UserTokenIssuerInterface $tokenIssuer = null, ?\Magento\Integration\Api\UserTokenRevokerInterface $tokenRevoker = null)
    {
        $this->___init();
        parent::__construct($tokenModelFactory, $userModel, $tokenModelCollectionFactory, $validatorHelper, $tokenParamsFactory, $tokenIssuer, $tokenRevoker);
    }

    /**
     * {@inheritdoc}
     */
    public function createAdminAccessToken($username, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createAdminAccessToken');
        return $pluginInfo ? $this->___callPlugins('createAdminAccessToken', func_get_args(), $pluginInfo) : parent::createAdminAccessToken($username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function revokeAdminAccessToken($adminId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'revokeAdminAccessToken');
        return $pluginInfo ? $this->___callPlugins('revokeAdminAccessToken', func_get_args(), $pluginInfo) : parent::revokeAdminAccessToken($adminId);
    }
}
