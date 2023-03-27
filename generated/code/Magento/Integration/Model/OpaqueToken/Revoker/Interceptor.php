<?php
namespace Magento\Integration\Model\OpaqueToken\Revoker;

/**
 * Interceptor class for @see \Magento\Integration\Model\OpaqueToken\Revoker
 */
class Interceptor extends \Magento\Integration\Model\OpaqueToken\Revoker implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\ResourceModel\Oauth\Token\CollectionFactory $tokenCollectionFactory)
    {
        $this->___init();
        parent::__construct($tokenCollectionFactory);
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
