<?php
namespace Magento\Integration\Model\Validator\BearerTokenValidator;

/**
 * Interceptor class for @see \Magento\Integration\Model\Validator\BearerTokenValidator
 */
class Interceptor extends \Magento\Integration\Model\Validator\BearerTokenValidator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\Config\AuthorizationConfig $authorizationConfig)
    {
        $this->___init();
        parent::__construct($authorizationConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function isIntegrationAllowedAsBearerToken(\Magento\Integration\Model\Integration $integration) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isIntegrationAllowedAsBearerToken');
        return $pluginInfo ? $this->___callPlugins('isIntegrationAllowedAsBearerToken', func_get_args(), $pluginInfo) : parent::isIntegrationAllowedAsBearerToken($integration);
    }
}
