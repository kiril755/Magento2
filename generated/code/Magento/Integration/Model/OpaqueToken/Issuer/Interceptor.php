<?php
namespace Magento\Integration\Model\OpaqueToken\Issuer;

/**
 * Interceptor class for @see \Magento\Integration\Model\OpaqueToken\Issuer
 */
class Interceptor extends \Magento\Integration\Model\OpaqueToken\Issuer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\Oauth\TokenFactory $tokenFactory, \Magento\Framework\Oauth\Helper\Oauth $helper)
    {
        $this->___init();
        parent::__construct($tokenFactory, $helper);
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
