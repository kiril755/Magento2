<?php
namespace Magento\JwtUserToken\Model\Issuer;

/**
 * Interceptor class for @see \Magento\JwtUserToken\Model\Issuer
 */
class Interceptor extends \Magento\JwtUserToken\Model\Issuer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Jwt\JwtManagerInterface $jwtManager, \Magento\JwtUserToken\Model\JwtSettingsProviderInterface $settingsProvider, \Magento\JwtUserToken\Api\ConfigReaderInterface $configReader)
    {
        $this->___init();
        parent::__construct($jwtManager, $settingsProvider, $configReader);
    }

    /**
     * {@inheritdoc}
     */
    public function create(\Magento\Authorization\Model\UserContextInterface $userContext, \Magento\Integration\Api\Data\UserTokenParametersInterface $params) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($userContext, $params);
    }
}
