<?php
namespace Magento\Catalog\Model\ResourceModel\Product\Action;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Product\Action
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Product\Action implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Factory $modelFactory, \Magento\Eav\Model\Entity\Attribute\UniqueValidationInterface $uniqueValidator, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Product\TypeTransitionManager $typeTransitionManager, $data = [])
    {
        $this->___init();
        parent::__construct($context, $storeManager, $modelFactory, $uniqueValidator, $dateTime, $productCollectionFactory, $typeTransitionManager, $data);
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
    public function delete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }
}
