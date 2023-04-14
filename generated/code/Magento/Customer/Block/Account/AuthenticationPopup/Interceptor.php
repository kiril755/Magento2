<?php
namespace Magento\Customer\Block\Account\AuthenticationPopup;

/**
 * Interceptor class for @see \Magento\Customer\Block\Account\AuthenticationPopup
 */
class Interceptor extends \Magento\Customer\Block\Account\AuthenticationPopup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsLayout');
        return $pluginInfo ? $this->___callPlugins('getJsLayout', func_get_args(), $pluginInfo) : parent::getJsLayout();
    }
}
