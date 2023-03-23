<?php
namespace Magento\JwtUserToken\Model\Revoker;

/**
 * Interceptor class for @see \Magento\JwtUserToken\Model\Revoker
 */
class Interceptor extends \Magento\JwtUserToken\Model\Revoker implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\JwtUserToken\Api\RevokedRepositoryInterface $revokedRepo)
    {
        $this->___init();
        parent::__construct($revokedRepo);
    }

    /**
     * {@inheritdoc}
     */
    public function revokeFor(\Magento\Authorization\Model\UserContextInterface $userContext) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'revokeFor');
        $pluginInfo ? $this->___callPlugins('revokeFor', func_get_args(), $pluginInfo) : parent::revokeFor($userContext);
    }
}
