<?php
namespace Magento\Catalog\Model\ResourceModel\Attribute;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Attribute
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Attribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\ResourceModel\Entity\Type $eavEntityType, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Attribute\LockValidatorInterface $lockValidator, $connectionName = null, ?\Magento\Catalog\Model\ResourceModel\Attribute\RemoveProductAttributeData $removeProductAttributeData = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $eavEntityType, $eavConfig, $lockValidator, $connectionName, $removeProductAttributeData);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabelsByAttributeId($attributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabelsByAttributeId');
        return $pluginInfo ? $this->___callPlugins('getStoreLabelsByAttributeId', func_get_args(), $pluginInfo) : parent::getStoreLabelsByAttributeId($attributeId);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($object);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }
}
