<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Messages;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Messages
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Messages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Message\Factory $messageFactory, \Magento\Framework\Message\CollectionFactory $collectionFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\View\Element\Message\InterpretationStrategyInterface $interpretationStrategy, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $messageFactory, $collectionFactory, $messageManager, $interpretationStrategy, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
