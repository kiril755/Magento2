<?php
namespace Magento\Cms\Model\ResourceModel\Page;

/**
 * Interceptor class for @see \Magento\Cms\Model\ResourceModel\Page
 */
class Interceptor extends \Magento\Cms\Model\ResourceModel\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\EntityManager\EntityManager $entityManager, \Magento\Framework\EntityManager\MetadataPool $metadataPool, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $dateTime, $entityManager, $metadataPool, $connectionName);
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
