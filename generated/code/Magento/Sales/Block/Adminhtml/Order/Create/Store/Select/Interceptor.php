<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Store\Select;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Store\Select
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Store\Select implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Store\Model\WebsiteFactory $websiteFactory, \Magento\Store\Model\GroupFactory $storeGroupFactory, \Magento\Store\Model\StoreFactory $storeFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $websiteFactory, $storeGroupFactory, $storeFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }
}
