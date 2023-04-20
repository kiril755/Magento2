<?php
namespace Magento\ImportExport\Block\Adminhtml\Import\Edit\Form;

/**
 * Interceptor class for @see \Magento\ImportExport\Block\Adminhtml\Import\Edit\Form
 */
class Interceptor extends \Magento\ImportExport\Block\Adminhtml\Import\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\ImportExport\Model\Import $importModel, \Magento\ImportExport\Model\Source\Import\EntityFactory $entityFactory, \Magento\ImportExport\Model\Source\Import\Behavior\Factory $behaviorFactory, array $data = [], ?\Magento\ImportExport\Model\Import\ImageDirectoryBaseProvider $imageDirProvider = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $importModel, $entityFactory, $behaviorFactory, $data, $imageDirProvider);
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
