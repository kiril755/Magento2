<?php
namespace Magento\Shipping\Block\Tracking\Popup;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Tracking\Popup
 */
class Interceptor extends \Magento\Shipping\Block\Tracking\Popup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface $dateTimeFormatter, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $dateTimeFormatter, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDeliveryDateTime($date, $time)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDeliveryDateTime');
        return $pluginInfo ? $this->___callPlugins('formatDeliveryDateTime', func_get_args(), $pluginInfo) : parent::formatDeliveryDateTime($date, $time);
    }
}
