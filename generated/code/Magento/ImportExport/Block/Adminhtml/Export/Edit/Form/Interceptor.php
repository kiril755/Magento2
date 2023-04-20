<?php
namespace Magento\ImportExport\Block\Adminhtml\Export\Edit\Form;

/**
 * Interceptor class for @see \Magento\ImportExport\Block\Adminhtml\Export\Edit\Form
 */
class Interceptor extends \Magento\ImportExport\Block\Adminhtml\Export\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\ImportExport\Model\Source\Export\EntityFactory $entityFactory, \Magento\ImportExport\Model\Source\Export\FormatFactory $formatFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $entityFactory, $formatFactory, $data);
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
