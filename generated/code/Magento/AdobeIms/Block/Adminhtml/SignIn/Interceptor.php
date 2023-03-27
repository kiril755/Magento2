<?php
namespace Magento\AdobeIms\Block\Adminhtml\SignIn;

/**
 * Interceptor class for @see \Magento\AdobeIms\Block\Adminhtml\SignIn
 */
class Interceptor extends \Magento\AdobeIms\Block\Adminhtml\SignIn implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\AdobeImsApi\Api\ConfigInterface $config, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\AdobeImsApi\Api\UserAuthorizedInterface $userAuthorized, \Magento\AdobeImsApi\Api\UserProfileRepositoryInterface $userProfileRepository, \Magento\Framework\Serialize\Serializer\JsonHexTag $json, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $userContext, $userAuthorized, $userProfileRepository, $json, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getComponentJsonConfig() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getComponentJsonConfig');
        return $pluginInfo ? $this->___callPlugins('getComponentJsonConfig', func_get_args(), $pluginInfo) : parent::getComponentJsonConfig();
    }
}
