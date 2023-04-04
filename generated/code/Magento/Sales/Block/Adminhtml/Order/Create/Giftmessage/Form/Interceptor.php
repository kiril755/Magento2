<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Giftmessage\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Giftmessage\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Giftmessage\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\GiftMessage\Helper\Message $messageHelper, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Helper\View $customerViewHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $sessionQuote, $messageHelper, $customerRepository, $customerViewHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
