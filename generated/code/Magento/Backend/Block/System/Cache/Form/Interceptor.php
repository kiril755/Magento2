<?php
namespace Magento\Backend\Block\System\Cache\Form;

/**
 * Interceptor class for @see \Magento\Backend\Block\System\Cache\Form
 */
class Interceptor extends \Magento\Backend\Block\System\Cache\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $cacheTypeList, $data);
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
