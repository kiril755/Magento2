<?php
namespace Magento\Quote\Model\ResourceModel\Quote\Address;

/**
 * Interceptor class for @see \Magento\Quote\Model\ResourceModel\Quote\Address
 */
class Interceptor extends \Magento\Quote\Model\ResourceModel\Quote\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot, \Magento\Framework\Model\ResourceModel\Db\VersionControl\RelationComposite $entityRelationComposite, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $entitySnapshot, $entityRelationComposite, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($object, $value, $field);
    }
}
