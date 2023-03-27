<?php
namespace Magento\GraphQl\Model\Query;

/**
 * ExtensionInterface class for @see \Magento\GraphQl\Model\Query\ContextInterface
 */
interface ContextExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Store\Api\Data\StoreInterface|null
     */
    public function getStore();

    /**
     * @param \Magento\Store\Api\Data\StoreInterface $store
     * @return $this
     */
    public function setStore(\Magento\Store\Api\Data\StoreInterface $store);

    /**
     * @return boolean|null
     */
    public function getIsCustomer();

    /**
     * @param boolean $isCustomer
     * @return $this
     */
    public function setIsCustomer($isCustomer);

    /**
     * @return integer|null
     */
    public function getCustomerGroupId();

    /**
     * @param integer $customerGroupId
     * @return $this
     */
    public function setCustomerGroupId($customerGroupId);
}
