<?php
namespace Magento\Sales\Model\Order\Item;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Item
 */
class Interceptor extends \Magento\Sales\Model\Order\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $orderFactory, $storeManager, $productRepository, $resource, $resourceCollection, $data, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function setParentItem($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentItem');
        return $pluginInfo ? $this->___callPlugins('setParentItem', func_get_args(), $pluginInfo) : parent::setParentItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentItem');
        return $pluginInfo ? $this->___callPlugins('getParentItem', func_get_args(), $pluginInfo) : parent::getParentItem();
    }

    /**
     * {@inheritdoc}
     */
    public function canInvoice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canInvoice');
        return $pluginInfo ? $this->___callPlugins('canInvoice', func_get_args(), $pluginInfo) : parent::canInvoice();
    }

    /**
     * {@inheritdoc}
     */
    public function canShip()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShip');
        return $pluginInfo ? $this->___callPlugins('canShip', func_get_args(), $pluginInfo) : parent::canShip();
    }

    /**
     * {@inheritdoc}
     */
    public function canRefund()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefund');
        return $pluginInfo ? $this->___callPlugins('canRefund', func_get_args(), $pluginInfo) : parent::canRefund();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyToShip()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyToShip');
        return $pluginInfo ? $this->___callPlugins('getQtyToShip', func_get_args(), $pluginInfo) : parent::getQtyToShip();
    }

    /**
     * {@inheritdoc}
     */
    public function getSimpleQtyToShip()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSimpleQtyToShip');
        return $pluginInfo ? $this->___callPlugins('getSimpleQtyToShip', func_get_args(), $pluginInfo) : parent::getSimpleQtyToShip();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyToInvoice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyToInvoice');
        return $pluginInfo ? $this->___callPlugins('getQtyToInvoice', func_get_args(), $pluginInfo) : parent::getQtyToInvoice();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyToRefund()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyToRefund');
        return $pluginInfo ? $this->___callPlugins('getQtyToRefund', func_get_args(), $pluginInfo) : parent::getQtyToRefund();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyToCancel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyToCancel');
        return $pluginInfo ? $this->___callPlugins('getQtyToCancel', func_get_args(), $pluginInfo) : parent::getQtyToCancel();
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(\Magento\Sales\Model\Order $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        return $pluginInfo ? $this->___callPlugins('setOrder', func_get_args(), $pluginInfo) : parent::setOrder($order);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrder');
        return $pluginInfo ? $this->___callPlugins('getOrder', func_get_args(), $pluginInfo) : parent::getOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatusId');
        return $pluginInfo ? $this->___callPlugins('getStatusId', func_get_args(), $pluginInfo) : parent::getStatusId();
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatus');
        return $pluginInfo ? $this->___callPlugins('getStatus', func_get_args(), $pluginInfo) : parent::getStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function cancel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancel');
        return $pluginInfo ? $this->___callPlugins('cancel', func_get_args(), $pluginInfo) : parent::cancel();
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOriginalPrice');
        return $pluginInfo ? $this->___callPlugins('getOriginalPrice', func_get_args(), $pluginInfo) : parent::getOriginalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function setProductOptions(?array $options = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductOptions');
        return $pluginInfo ? $this->___callPlugins('setProductOptions', func_get_args(), $pluginInfo) : parent::setProductOptions($options);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductOptions');
        return $pluginInfo ? $this->___callPlugins('getProductOptions', func_get_args(), $pluginInfo) : parent::getProductOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductOptionByCode($code = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductOptionByCode');
        return $pluginInfo ? $this->___callPlugins('getProductOptionByCode', func_get_args(), $pluginInfo) : parent::getProductOptionByCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getRealProductType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRealProductType');
        return $pluginInfo ? $this->___callPlugins('getRealProductType', func_get_args(), $pluginInfo) : parent::getRealProductType();
    }

    /**
     * {@inheritdoc}
     */
    public function addChildItem($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChildItem');
        return $pluginInfo ? $this->___callPlugins('addChildItem', func_get_args(), $pluginInfo) : parent::addChildItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenItems');
        return $pluginInfo ? $this->___callPlugins('getChildrenItems', func_get_args(), $pluginInfo) : parent::getChildrenItems();
    }

    /**
     * {@inheritdoc}
     */
    public function isChildrenCalculated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isChildrenCalculated');
        return $pluginInfo ? $this->___callPlugins('isChildrenCalculated', func_get_args(), $pluginInfo) : parent::isChildrenCalculated();
    }

    /**
     * {@inheritdoc}
     */
    public function getForceApplyDiscountToParentItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForceApplyDiscountToParentItem');
        return $pluginInfo ? $this->___callPlugins('getForceApplyDiscountToParentItem', func_get_args(), $pluginInfo) : parent::getForceApplyDiscountToParentItem();
    }

    /**
     * {@inheritdoc}
     */
    public function isShipSeparately()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShipSeparately');
        return $pluginInfo ? $this->___callPlugins('isShipSeparately', func_get_args(), $pluginInfo) : parent::isShipSeparately();
    }

    /**
     * {@inheritdoc}
     */
    public function isDummy($shipment = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDummy');
        return $pluginInfo ? $this->___callPlugins('isDummy', func_get_args(), $pluginInfo) : parent::isDummy($shipment);
    }

    /**
     * {@inheritdoc}
     */
    public function getBuyRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBuyRequest');
        return $pluginInfo ? $this->___callPlugins('getBuyRequest', func_get_args(), $pluginInfo) : parent::getBuyRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProduct');
        return $pluginInfo ? $this->___callPlugins('getProduct', func_get_args(), $pluginInfo) : parent::getProduct();
    }

    /**
     * {@inheritdoc}
     */
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        return $pluginInfo ? $this->___callPlugins('getStore', func_get_args(), $pluginInfo) : parent::getStore();
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalData');
        return $pluginInfo ? $this->___callPlugins('getAdditionalData', func_get_args(), $pluginInfo) : parent::getAdditionalData();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('getAmountRefunded', func_get_args(), $pluginInfo) : parent::getAmountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getAppliedRuleIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAppliedRuleIds');
        return $pluginInfo ? $this->___callPlugins('getAppliedRuleIds', func_get_args(), $pluginInfo) : parent::getAppliedRuleIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountRefunded', func_get_args(), $pluginInfo) : parent::getBaseAmountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCost()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseCost');
        return $pluginInfo ? $this->___callPlugins('getBaseCost', func_get_args(), $pluginInfo) : parent::getBaseCost();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountAmount', func_get_args(), $pluginInfo) : parent::getBaseDiscountAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountInvoiced');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountInvoiced', func_get_args(), $pluginInfo) : parent::getBaseDiscountInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountRefunded');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountRefunded', func_get_args(), $pluginInfo) : parent::getBaseDiscountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountTaxCompensationAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::getBaseDiscountTaxCompensationAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountTaxCompensationInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountTaxCompensationInvoiced');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountTaxCompensationInvoiced', func_get_args(), $pluginInfo) : parent::getBaseDiscountTaxCompensationInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountTaxCompensationRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountTaxCompensationRefunded');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountTaxCompensationRefunded', func_get_args(), $pluginInfo) : parent::getBaseDiscountTaxCompensationRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseOriginalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseOriginalPrice');
        return $pluginInfo ? $this->___callPlugins('getBaseOriginalPrice', func_get_args(), $pluginInfo) : parent::getBaseOriginalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBasePrice');
        return $pluginInfo ? $this->___callPlugins('getBasePrice', func_get_args(), $pluginInfo) : parent::getBasePrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePriceInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBasePriceInclTax');
        return $pluginInfo ? $this->___callPlugins('getBasePriceInclTax', func_get_args(), $pluginInfo) : parent::getBasePriceInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseRowInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseRowInvoiced');
        return $pluginInfo ? $this->___callPlugins('getBaseRowInvoiced', func_get_args(), $pluginInfo) : parent::getBaseRowInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseRowTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseRowTotal');
        return $pluginInfo ? $this->___callPlugins('getBaseRowTotal', func_get_args(), $pluginInfo) : parent::getBaseRowTotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseRowTotalInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseRowTotalInclTax');
        return $pluginInfo ? $this->___callPlugins('getBaseRowTotalInclTax', func_get_args(), $pluginInfo) : parent::getBaseRowTotalInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseTaxAmount', func_get_args(), $pluginInfo) : parent::getBaseTaxAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTaxBeforeDiscount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTaxBeforeDiscount');
        return $pluginInfo ? $this->___callPlugins('getBaseTaxBeforeDiscount', func_get_args(), $pluginInfo) : parent::getBaseTaxBeforeDiscount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTaxInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTaxInvoiced');
        return $pluginInfo ? $this->___callPlugins('getBaseTaxInvoiced', func_get_args(), $pluginInfo) : parent::getBaseTaxInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTaxRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTaxRefunded');
        return $pluginInfo ? $this->___callPlugins('getBaseTaxRefunded', func_get_args(), $pluginInfo) : parent::getBaseTaxRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseWeeeTaxAppliedAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseWeeeTaxAppliedAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseWeeeTaxAppliedAmount', func_get_args(), $pluginInfo) : parent::getBaseWeeeTaxAppliedAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseWeeeTaxAppliedRowAmnt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseWeeeTaxAppliedRowAmnt');
        return $pluginInfo ? $this->___callPlugins('getBaseWeeeTaxAppliedRowAmnt', func_get_args(), $pluginInfo) : parent::getBaseWeeeTaxAppliedRowAmnt();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseWeeeTaxDisposition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseWeeeTaxDisposition');
        return $pluginInfo ? $this->___callPlugins('getBaseWeeeTaxDisposition', func_get_args(), $pluginInfo) : parent::getBaseWeeeTaxDisposition();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseWeeeTaxRowDisposition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseWeeeTaxRowDisposition');
        return $pluginInfo ? $this->___callPlugins('getBaseWeeeTaxRowDisposition', func_get_args(), $pluginInfo) : parent::getBaseWeeeTaxRowDisposition();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedAt');
        return $pluginInfo ? $this->___callPlugins('getCreatedAt', func_get_args(), $pluginInfo) : parent::getCreatedAt();
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreatedAt');
        return $pluginInfo ? $this->___callPlugins('setCreatedAt', func_get_args(), $pluginInfo) : parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        return $pluginInfo ? $this->___callPlugins('getDescription', func_get_args(), $pluginInfo) : parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('getDiscountAmount', func_get_args(), $pluginInfo) : parent::getDiscountAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountInvoiced');
        return $pluginInfo ? $this->___callPlugins('getDiscountInvoiced', func_get_args(), $pluginInfo) : parent::getDiscountInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountPercent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountPercent');
        return $pluginInfo ? $this->___callPlugins('getDiscountPercent', func_get_args(), $pluginInfo) : parent::getDiscountPercent();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountRefunded');
        return $pluginInfo ? $this->___callPlugins('getDiscountRefunded', func_get_args(), $pluginInfo) : parent::getDiscountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventId');
        return $pluginInfo ? $this->___callPlugins('getEventId', func_get_args(), $pluginInfo) : parent::getEventId();
    }

    /**
     * {@inheritdoc}
     */
    public function getExtOrderItemId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtOrderItemId');
        return $pluginInfo ? $this->___callPlugins('getExtOrderItemId', func_get_args(), $pluginInfo) : parent::getExtOrderItemId();
    }

    /**
     * {@inheritdoc}
     */
    public function getFreeShipping()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFreeShipping');
        return $pluginInfo ? $this->___callPlugins('getFreeShipping', func_get_args(), $pluginInfo) : parent::getFreeShipping();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwBasePrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwBasePrice');
        return $pluginInfo ? $this->___callPlugins('getGwBasePrice', func_get_args(), $pluginInfo) : parent::getGwBasePrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwBasePriceInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwBasePriceInvoiced');
        return $pluginInfo ? $this->___callPlugins('getGwBasePriceInvoiced', func_get_args(), $pluginInfo) : parent::getGwBasePriceInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwBasePriceRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwBasePriceRefunded');
        return $pluginInfo ? $this->___callPlugins('getGwBasePriceRefunded', func_get_args(), $pluginInfo) : parent::getGwBasePriceRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwBaseTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwBaseTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getGwBaseTaxAmount', func_get_args(), $pluginInfo) : parent::getGwBaseTaxAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwBaseTaxAmountInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwBaseTaxAmountInvoiced');
        return $pluginInfo ? $this->___callPlugins('getGwBaseTaxAmountInvoiced', func_get_args(), $pluginInfo) : parent::getGwBaseTaxAmountInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwBaseTaxAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwBaseTaxAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('getGwBaseTaxAmountRefunded', func_get_args(), $pluginInfo) : parent::getGwBaseTaxAmountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwId');
        return $pluginInfo ? $this->___callPlugins('getGwId', func_get_args(), $pluginInfo) : parent::getGwId();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwPrice');
        return $pluginInfo ? $this->___callPlugins('getGwPrice', func_get_args(), $pluginInfo) : parent::getGwPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwPriceInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwPriceInvoiced');
        return $pluginInfo ? $this->___callPlugins('getGwPriceInvoiced', func_get_args(), $pluginInfo) : parent::getGwPriceInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwPriceRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwPriceRefunded');
        return $pluginInfo ? $this->___callPlugins('getGwPriceRefunded', func_get_args(), $pluginInfo) : parent::getGwPriceRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getGwTaxAmount', func_get_args(), $pluginInfo) : parent::getGwTaxAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwTaxAmountInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwTaxAmountInvoiced');
        return $pluginInfo ? $this->___callPlugins('getGwTaxAmountInvoiced', func_get_args(), $pluginInfo) : parent::getGwTaxAmountInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getGwTaxAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGwTaxAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('getGwTaxAmountRefunded', func_get_args(), $pluginInfo) : parent::getGwTaxAmountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountTaxCompensationAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('getDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::getDiscountTaxCompensationAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountTaxCompensationCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountTaxCompensationCanceled');
        return $pluginInfo ? $this->___callPlugins('getDiscountTaxCompensationCanceled', func_get_args(), $pluginInfo) : parent::getDiscountTaxCompensationCanceled();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountTaxCompensationInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountTaxCompensationInvoiced');
        return $pluginInfo ? $this->___callPlugins('getDiscountTaxCompensationInvoiced', func_get_args(), $pluginInfo) : parent::getDiscountTaxCompensationInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountTaxCompensationRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountTaxCompensationRefunded');
        return $pluginInfo ? $this->___callPlugins('getDiscountTaxCompensationRefunded', func_get_args(), $pluginInfo) : parent::getDiscountTaxCompensationRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsQtyDecimal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsQtyDecimal');
        return $pluginInfo ? $this->___callPlugins('getIsQtyDecimal', func_get_args(), $pluginInfo) : parent::getIsQtyDecimal();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVirtual()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVirtual');
        return $pluginInfo ? $this->___callPlugins('getIsVirtual', func_get_args(), $pluginInfo) : parent::getIsVirtual();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemId');
        return $pluginInfo ? $this->___callPlugins('getItemId', func_get_args(), $pluginInfo) : parent::getItemId();
    }

    /**
     * {@inheritdoc}
     */
    public function getLockedDoInvoice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLockedDoInvoice');
        return $pluginInfo ? $this->___callPlugins('getLockedDoInvoice', func_get_args(), $pluginInfo) : parent::getLockedDoInvoice();
    }

    /**
     * {@inheritdoc}
     */
    public function getLockedDoShip()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLockedDoShip');
        return $pluginInfo ? $this->___callPlugins('getLockedDoShip', func_get_args(), $pluginInfo) : parent::getLockedDoShip();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function getNoDiscount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNoDiscount');
        return $pluginInfo ? $this->___callPlugins('getNoDiscount', func_get_args(), $pluginInfo) : parent::getNoDiscount();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderId');
        return $pluginInfo ? $this->___callPlugins('getOrderId', func_get_args(), $pluginInfo) : parent::getOrderId();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentItemId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentItemId');
        return $pluginInfo ? $this->___callPlugins('getParentItemId', func_get_args(), $pluginInfo) : parent::getParentItemId();
    }

    /**
     * {@inheritdoc}
     */
    public function getPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrice');
        return $pluginInfo ? $this->___callPlugins('getPrice', func_get_args(), $pluginInfo) : parent::getPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceInclTax');
        return $pluginInfo ? $this->___callPlugins('getPriceInclTax', func_get_args(), $pluginInfo) : parent::getPriceInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductId');
        return $pluginInfo ? $this->___callPlugins('getProductId', func_get_args(), $pluginInfo) : parent::getProductId();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductType');
        return $pluginInfo ? $this->___callPlugins('getProductType', func_get_args(), $pluginInfo) : parent::getProductType();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyBackordered()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyBackordered');
        return $pluginInfo ? $this->___callPlugins('getQtyBackordered', func_get_args(), $pluginInfo) : parent::getQtyBackordered();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyCanceled');
        return $pluginInfo ? $this->___callPlugins('getQtyCanceled', func_get_args(), $pluginInfo) : parent::getQtyCanceled();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyInvoiced');
        return $pluginInfo ? $this->___callPlugins('getQtyInvoiced', func_get_args(), $pluginInfo) : parent::getQtyInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyOrdered()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyOrdered');
        return $pluginInfo ? $this->___callPlugins('getQtyOrdered', func_get_args(), $pluginInfo) : parent::getQtyOrdered();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyRefunded');
        return $pluginInfo ? $this->___callPlugins('getQtyRefunded', func_get_args(), $pluginInfo) : parent::getQtyRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyReturned()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyReturned');
        return $pluginInfo ? $this->___callPlugins('getQtyReturned', func_get_args(), $pluginInfo) : parent::getQtyReturned();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyShipped()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyShipped');
        return $pluginInfo ? $this->___callPlugins('getQtyShipped', func_get_args(), $pluginInfo) : parent::getQtyShipped();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteItemId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteItemId');
        return $pluginInfo ? $this->___callPlugins('getQuoteItemId', func_get_args(), $pluginInfo) : parent::getQuoteItemId();
    }

    /**
     * {@inheritdoc}
     */
    public function getRowInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowInvoiced');
        return $pluginInfo ? $this->___callPlugins('getRowInvoiced', func_get_args(), $pluginInfo) : parent::getRowInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getRowTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowTotal');
        return $pluginInfo ? $this->___callPlugins('getRowTotal', func_get_args(), $pluginInfo) : parent::getRowTotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getRowTotalInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowTotalInclTax');
        return $pluginInfo ? $this->___callPlugins('getRowTotalInclTax', func_get_args(), $pluginInfo) : parent::getRowTotalInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getRowWeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowWeight');
        return $pluginInfo ? $this->___callPlugins('getRowWeight', func_get_args(), $pluginInfo) : parent::getRowWeight();
    }

    /**
     * {@inheritdoc}
     */
    public function getSku()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        return $pluginInfo ? $this->___callPlugins('getSku', func_get_args(), $pluginInfo) : parent::getSku();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreId');
        return $pluginInfo ? $this->___callPlugins('getStoreId', func_get_args(), $pluginInfo) : parent::getStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getTaxAmount', func_get_args(), $pluginInfo) : parent::getTaxAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxBeforeDiscount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxBeforeDiscount');
        return $pluginInfo ? $this->___callPlugins('getTaxBeforeDiscount', func_get_args(), $pluginInfo) : parent::getTaxBeforeDiscount();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxCanceled');
        return $pluginInfo ? $this->___callPlugins('getTaxCanceled', func_get_args(), $pluginInfo) : parent::getTaxCanceled();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxInvoiced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxInvoiced');
        return $pluginInfo ? $this->___callPlugins('getTaxInvoiced', func_get_args(), $pluginInfo) : parent::getTaxInvoiced();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxPercent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxPercent');
        return $pluginInfo ? $this->___callPlugins('getTaxPercent', func_get_args(), $pluginInfo) : parent::getTaxPercent();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxRefunded');
        return $pluginInfo ? $this->___callPlugins('getTaxRefunded', func_get_args(), $pluginInfo) : parent::getTaxRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdatedAt');
        return $pluginInfo ? $this->___callPlugins('getUpdatedAt', func_get_args(), $pluginInfo) : parent::getUpdatedAt();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeeeTaxApplied()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeeeTaxApplied');
        return $pluginInfo ? $this->___callPlugins('getWeeeTaxApplied', func_get_args(), $pluginInfo) : parent::getWeeeTaxApplied();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeeeTaxAppliedAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeeeTaxAppliedAmount');
        return $pluginInfo ? $this->___callPlugins('getWeeeTaxAppliedAmount', func_get_args(), $pluginInfo) : parent::getWeeeTaxAppliedAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeeeTaxAppliedRowAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeeeTaxAppliedRowAmount');
        return $pluginInfo ? $this->___callPlugins('getWeeeTaxAppliedRowAmount', func_get_args(), $pluginInfo) : parent::getWeeeTaxAppliedRowAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeeeTaxDisposition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeeeTaxDisposition');
        return $pluginInfo ? $this->___callPlugins('getWeeeTaxDisposition', func_get_args(), $pluginInfo) : parent::getWeeeTaxDisposition();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeeeTaxRowDisposition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeeeTaxRowDisposition');
        return $pluginInfo ? $this->___callPlugins('getWeeeTaxRowDisposition', func_get_args(), $pluginInfo) : parent::getWeeeTaxRowDisposition();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeight');
        return $pluginInfo ? $this->___callPlugins('getWeight', func_get_args(), $pluginInfo) : parent::getWeight();
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($timestamp)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUpdatedAt');
        return $pluginInfo ? $this->___callPlugins('setUpdatedAt', func_get_args(), $pluginInfo) : parent::setUpdatedAt($timestamp);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemId');
        return $pluginInfo ? $this->___callPlugins('setItemId', func_get_args(), $pluginInfo) : parent::setItemId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrderId');
        return $pluginInfo ? $this->___callPlugins('setOrderId', func_get_args(), $pluginInfo) : parent::setOrderId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setParentItemId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentItemId');
        return $pluginInfo ? $this->___callPlugins('setParentItemId', func_get_args(), $pluginInfo) : parent::setParentItemId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setQuoteItemId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuoteItemId');
        return $pluginInfo ? $this->___callPlugins('setQuoteItemId', func_get_args(), $pluginInfo) : parent::setQuoteItemId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        return $pluginInfo ? $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo) : parent::setStoreId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setProductId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductId');
        return $pluginInfo ? $this->___callPlugins('setProductId', func_get_args(), $pluginInfo) : parent::setProductId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setProductType($productType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductType');
        return $pluginInfo ? $this->___callPlugins('setProductType', func_get_args(), $pluginInfo) : parent::setProductType($productType);
    }

    /**
     * {@inheritdoc}
     */
    public function setWeight($weight)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeight');
        return $pluginInfo ? $this->___callPlugins('setWeight', func_get_args(), $pluginInfo) : parent::setWeight($weight);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVirtual($isVirtual)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVirtual');
        return $pluginInfo ? $this->___callPlugins('setIsVirtual', func_get_args(), $pluginInfo) : parent::setIsVirtual($isVirtual);
    }

    /**
     * {@inheritdoc}
     */
    public function setSku($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSku');
        return $pluginInfo ? $this->___callPlugins('setSku', func_get_args(), $pluginInfo) : parent::setSku($sku);
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        return $pluginInfo ? $this->___callPlugins('setName', func_get_args(), $pluginInfo) : parent::setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDescription');
        return $pluginInfo ? $this->___callPlugins('setDescription', func_get_args(), $pluginInfo) : parent::setDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function setAppliedRuleIds($appliedRuleIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAppliedRuleIds');
        return $pluginInfo ? $this->___callPlugins('setAppliedRuleIds', func_get_args(), $pluginInfo) : parent::setAppliedRuleIds($appliedRuleIds);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalData($additionalData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAdditionalData');
        return $pluginInfo ? $this->___callPlugins('setAdditionalData', func_get_args(), $pluginInfo) : parent::setAdditionalData($additionalData);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsQtyDecimal($isQtyDecimal)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsQtyDecimal');
        return $pluginInfo ? $this->___callPlugins('setIsQtyDecimal', func_get_args(), $pluginInfo) : parent::setIsQtyDecimal($isQtyDecimal);
    }

    /**
     * {@inheritdoc}
     */
    public function setNoDiscount($noDiscount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNoDiscount');
        return $pluginInfo ? $this->___callPlugins('setNoDiscount', func_get_args(), $pluginInfo) : parent::setNoDiscount($noDiscount);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyBackordered($qtyBackordered)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyBackordered');
        return $pluginInfo ? $this->___callPlugins('setQtyBackordered', func_get_args(), $pluginInfo) : parent::setQtyBackordered($qtyBackordered);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyCanceled($qtyCanceled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyCanceled');
        return $pluginInfo ? $this->___callPlugins('setQtyCanceled', func_get_args(), $pluginInfo) : parent::setQtyCanceled($qtyCanceled);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyInvoiced($qtyInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyInvoiced');
        return $pluginInfo ? $this->___callPlugins('setQtyInvoiced', func_get_args(), $pluginInfo) : parent::setQtyInvoiced($qtyInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyOrdered($qtyOrdered)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyOrdered');
        return $pluginInfo ? $this->___callPlugins('setQtyOrdered', func_get_args(), $pluginInfo) : parent::setQtyOrdered($qtyOrdered);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyRefunded($qtyRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyRefunded');
        return $pluginInfo ? $this->___callPlugins('setQtyRefunded', func_get_args(), $pluginInfo) : parent::setQtyRefunded($qtyRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyShipped($qtyShipped)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyShipped');
        return $pluginInfo ? $this->___callPlugins('setQtyShipped', func_get_args(), $pluginInfo) : parent::setQtyShipped($qtyShipped);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseCost($baseCost)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseCost');
        return $pluginInfo ? $this->___callPlugins('setBaseCost', func_get_args(), $pluginInfo) : parent::setBaseCost($baseCost);
    }

    /**
     * {@inheritdoc}
     */
    public function setPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPrice');
        return $pluginInfo ? $this->___callPlugins('setPrice', func_get_args(), $pluginInfo) : parent::setPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setBasePrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBasePrice');
        return $pluginInfo ? $this->___callPlugins('setBasePrice', func_get_args(), $pluginInfo) : parent::setBasePrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setOriginalPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOriginalPrice');
        return $pluginInfo ? $this->___callPlugins('setOriginalPrice', func_get_args(), $pluginInfo) : parent::setOriginalPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseOriginalPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseOriginalPrice');
        return $pluginInfo ? $this->___callPlugins('setBaseOriginalPrice', func_get_args(), $pluginInfo) : parent::setBaseOriginalPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxPercent($taxPercent)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTaxPercent');
        return $pluginInfo ? $this->___callPlugins('setTaxPercent', func_get_args(), $pluginInfo) : parent::setTaxPercent($taxPercent);
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setTaxAmount', func_get_args(), $pluginInfo) : parent::setTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseTaxAmount', func_get_args(), $pluginInfo) : parent::setBaseTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxInvoiced($taxInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTaxInvoiced');
        return $pluginInfo ? $this->___callPlugins('setTaxInvoiced', func_get_args(), $pluginInfo) : parent::setTaxInvoiced($taxInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTaxInvoiced($baseTaxInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTaxInvoiced');
        return $pluginInfo ? $this->___callPlugins('setBaseTaxInvoiced', func_get_args(), $pluginInfo) : parent::setBaseTaxInvoiced($baseTaxInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountPercent($discountPercent)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountPercent');
        return $pluginInfo ? $this->___callPlugins('setDiscountPercent', func_get_args(), $pluginInfo) : parent::setDiscountPercent($discountPercent);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('setDiscountAmount', func_get_args(), $pluginInfo) : parent::setDiscountAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountAmount', func_get_args(), $pluginInfo) : parent::setBaseDiscountAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountInvoiced($discountInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountInvoiced');
        return $pluginInfo ? $this->___callPlugins('setDiscountInvoiced', func_get_args(), $pluginInfo) : parent::setDiscountInvoiced($discountInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountInvoiced($baseDiscountInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountInvoiced');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountInvoiced', func_get_args(), $pluginInfo) : parent::setBaseDiscountInvoiced($baseDiscountInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountRefunded($amountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('setAmountRefunded', func_get_args(), $pluginInfo) : parent::setAmountRefunded($amountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountRefunded($baseAmountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountRefunded', func_get_args(), $pluginInfo) : parent::setBaseAmountRefunded($baseAmountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setRowTotal($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRowTotal');
        return $pluginInfo ? $this->___callPlugins('setRowTotal', func_get_args(), $pluginInfo) : parent::setRowTotal($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseRowTotal($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseRowTotal');
        return $pluginInfo ? $this->___callPlugins('setBaseRowTotal', func_get_args(), $pluginInfo) : parent::setBaseRowTotal($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setRowInvoiced($rowInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRowInvoiced');
        return $pluginInfo ? $this->___callPlugins('setRowInvoiced', func_get_args(), $pluginInfo) : parent::setRowInvoiced($rowInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseRowInvoiced($baseRowInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseRowInvoiced');
        return $pluginInfo ? $this->___callPlugins('setBaseRowInvoiced', func_get_args(), $pluginInfo) : parent::setBaseRowInvoiced($baseRowInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setRowWeight($rowWeight)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRowWeight');
        return $pluginInfo ? $this->___callPlugins('setRowWeight', func_get_args(), $pluginInfo) : parent::setRowWeight($rowWeight);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTaxBeforeDiscount($baseTaxBeforeDiscount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTaxBeforeDiscount');
        return $pluginInfo ? $this->___callPlugins('setBaseTaxBeforeDiscount', func_get_args(), $pluginInfo) : parent::setBaseTaxBeforeDiscount($baseTaxBeforeDiscount);
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxBeforeDiscount($taxBeforeDiscount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTaxBeforeDiscount');
        return $pluginInfo ? $this->___callPlugins('setTaxBeforeDiscount', func_get_args(), $pluginInfo) : parent::setTaxBeforeDiscount($taxBeforeDiscount);
    }

    /**
     * {@inheritdoc}
     */
    public function setExtOrderItemId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtOrderItemId');
        return $pluginInfo ? $this->___callPlugins('setExtOrderItemId', func_get_args(), $pluginInfo) : parent::setExtOrderItemId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setLockedDoInvoice($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLockedDoInvoice');
        return $pluginInfo ? $this->___callPlugins('setLockedDoInvoice', func_get_args(), $pluginInfo) : parent::setLockedDoInvoice($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setLockedDoShip($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLockedDoShip');
        return $pluginInfo ? $this->___callPlugins('setLockedDoShip', func_get_args(), $pluginInfo) : parent::setLockedDoShip($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setPriceInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPriceInclTax');
        return $pluginInfo ? $this->___callPlugins('setPriceInclTax', func_get_args(), $pluginInfo) : parent::setPriceInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBasePriceInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBasePriceInclTax');
        return $pluginInfo ? $this->___callPlugins('setBasePriceInclTax', func_get_args(), $pluginInfo) : parent::setBasePriceInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setRowTotalInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRowTotalInclTax');
        return $pluginInfo ? $this->___callPlugins('setRowTotalInclTax', func_get_args(), $pluginInfo) : parent::setRowTotalInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseRowTotalInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseRowTotalInclTax');
        return $pluginInfo ? $this->___callPlugins('setBaseRowTotalInclTax', func_get_args(), $pluginInfo) : parent::setBaseRowTotalInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountTaxCompensationAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('setDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::setDiscountTaxCompensationAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountTaxCompensationAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::setBaseDiscountTaxCompensationAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountTaxCompensationInvoiced($discountTaxCompensationInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountTaxCompensationInvoiced');
        return $pluginInfo ? $this->___callPlugins('setDiscountTaxCompensationInvoiced', func_get_args(), $pluginInfo) : parent::setDiscountTaxCompensationInvoiced($discountTaxCompensationInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountTaxCompensationInvoiced($baseDiscountTaxCompensationInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountTaxCompensationInvoiced');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountTaxCompensationInvoiced', func_get_args(), $pluginInfo) : parent::setBaseDiscountTaxCompensationInvoiced($baseDiscountTaxCompensationInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountTaxCompensationRefunded($discountTaxCompensationRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountTaxCompensationRefunded');
        return $pluginInfo ? $this->___callPlugins('setDiscountTaxCompensationRefunded', func_get_args(), $pluginInfo) : parent::setDiscountTaxCompensationRefunded($discountTaxCompensationRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountTaxCompensationRefunded($baseDiscountTaxCompensationRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountTaxCompensationRefunded');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountTaxCompensationRefunded', func_get_args(), $pluginInfo) : parent::setBaseDiscountTaxCompensationRefunded($baseDiscountTaxCompensationRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxCanceled($taxCanceled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTaxCanceled');
        return $pluginInfo ? $this->___callPlugins('setTaxCanceled', func_get_args(), $pluginInfo) : parent::setTaxCanceled($taxCanceled);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountTaxCompensationCanceled($discountTaxCompensationCanceled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountTaxCompensationCanceled');
        return $pluginInfo ? $this->___callPlugins('setDiscountTaxCompensationCanceled', func_get_args(), $pluginInfo) : parent::setDiscountTaxCompensationCanceled($discountTaxCompensationCanceled);
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxRefunded($taxRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTaxRefunded');
        return $pluginInfo ? $this->___callPlugins('setTaxRefunded', func_get_args(), $pluginInfo) : parent::setTaxRefunded($taxRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTaxRefunded($baseTaxRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTaxRefunded');
        return $pluginInfo ? $this->___callPlugins('setBaseTaxRefunded', func_get_args(), $pluginInfo) : parent::setBaseTaxRefunded($baseTaxRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountRefunded($discountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountRefunded');
        return $pluginInfo ? $this->___callPlugins('setDiscountRefunded', func_get_args(), $pluginInfo) : parent::setDiscountRefunded($discountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountRefunded($baseDiscountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountRefunded');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountRefunded', func_get_args(), $pluginInfo) : parent::setBaseDiscountRefunded($baseDiscountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwId');
        return $pluginInfo ? $this->___callPlugins('setGwId', func_get_args(), $pluginInfo) : parent::setGwId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwBasePrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwBasePrice');
        return $pluginInfo ? $this->___callPlugins('setGwBasePrice', func_get_args(), $pluginInfo) : parent::setGwBasePrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwPrice');
        return $pluginInfo ? $this->___callPlugins('setGwPrice', func_get_args(), $pluginInfo) : parent::setGwPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwBaseTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwBaseTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setGwBaseTaxAmount', func_get_args(), $pluginInfo) : parent::setGwBaseTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setGwTaxAmount', func_get_args(), $pluginInfo) : parent::setGwTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwBasePriceInvoiced($gwBasePriceInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwBasePriceInvoiced');
        return $pluginInfo ? $this->___callPlugins('setGwBasePriceInvoiced', func_get_args(), $pluginInfo) : parent::setGwBasePriceInvoiced($gwBasePriceInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwPriceInvoiced($gwPriceInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwPriceInvoiced');
        return $pluginInfo ? $this->___callPlugins('setGwPriceInvoiced', func_get_args(), $pluginInfo) : parent::setGwPriceInvoiced($gwPriceInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwBaseTaxAmountInvoiced($gwBaseTaxAmountInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwBaseTaxAmountInvoiced');
        return $pluginInfo ? $this->___callPlugins('setGwBaseTaxAmountInvoiced', func_get_args(), $pluginInfo) : parent::setGwBaseTaxAmountInvoiced($gwBaseTaxAmountInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwTaxAmountInvoiced($gwTaxAmountInvoiced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwTaxAmountInvoiced');
        return $pluginInfo ? $this->___callPlugins('setGwTaxAmountInvoiced', func_get_args(), $pluginInfo) : parent::setGwTaxAmountInvoiced($gwTaxAmountInvoiced);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwBasePriceRefunded($gwBasePriceRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwBasePriceRefunded');
        return $pluginInfo ? $this->___callPlugins('setGwBasePriceRefunded', func_get_args(), $pluginInfo) : parent::setGwBasePriceRefunded($gwBasePriceRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwPriceRefunded($gwPriceRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwPriceRefunded');
        return $pluginInfo ? $this->___callPlugins('setGwPriceRefunded', func_get_args(), $pluginInfo) : parent::setGwPriceRefunded($gwPriceRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwBaseTaxAmountRefunded($gwBaseTaxAmountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwBaseTaxAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('setGwBaseTaxAmountRefunded', func_get_args(), $pluginInfo) : parent::setGwBaseTaxAmountRefunded($gwBaseTaxAmountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setGwTaxAmountRefunded($gwTaxAmountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGwTaxAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('setGwTaxAmountRefunded', func_get_args(), $pluginInfo) : parent::setGwTaxAmountRefunded($gwTaxAmountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setFreeShipping($freeShipping)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFreeShipping');
        return $pluginInfo ? $this->___callPlugins('setFreeShipping', func_get_args(), $pluginInfo) : parent::setFreeShipping($freeShipping);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyReturned($qtyReturned)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyReturned');
        return $pluginInfo ? $this->___callPlugins('setQtyReturned', func_get_args(), $pluginInfo) : parent::setQtyReturned($qtyReturned);
    }

    /**
     * {@inheritdoc}
     */
    public function setEventId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEventId');
        return $pluginInfo ? $this->___callPlugins('setEventId', func_get_args(), $pluginInfo) : parent::setEventId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseWeeeTaxAppliedAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseWeeeTaxAppliedAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseWeeeTaxAppliedAmount', func_get_args(), $pluginInfo) : parent::setBaseWeeeTaxAppliedAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseWeeeTaxAppliedRowAmnt($amnt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseWeeeTaxAppliedRowAmnt');
        return $pluginInfo ? $this->___callPlugins('setBaseWeeeTaxAppliedRowAmnt', func_get_args(), $pluginInfo) : parent::setBaseWeeeTaxAppliedRowAmnt($amnt);
    }

    /**
     * {@inheritdoc}
     */
    public function setWeeeTaxAppliedAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeeeTaxAppliedAmount');
        return $pluginInfo ? $this->___callPlugins('setWeeeTaxAppliedAmount', func_get_args(), $pluginInfo) : parent::setWeeeTaxAppliedAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setWeeeTaxAppliedRowAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeeeTaxAppliedRowAmount');
        return $pluginInfo ? $this->___callPlugins('setWeeeTaxAppliedRowAmount', func_get_args(), $pluginInfo) : parent::setWeeeTaxAppliedRowAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setWeeeTaxApplied($weeeTaxApplied)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeeeTaxApplied');
        return $pluginInfo ? $this->___callPlugins('setWeeeTaxApplied', func_get_args(), $pluginInfo) : parent::setWeeeTaxApplied($weeeTaxApplied);
    }

    /**
     * {@inheritdoc}
     */
    public function setWeeeTaxDisposition($weeeTaxDisposition)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeeeTaxDisposition');
        return $pluginInfo ? $this->___callPlugins('setWeeeTaxDisposition', func_get_args(), $pluginInfo) : parent::setWeeeTaxDisposition($weeeTaxDisposition);
    }

    /**
     * {@inheritdoc}
     */
    public function setWeeeTaxRowDisposition($weeeTaxRowDisposition)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeeeTaxRowDisposition');
        return $pluginInfo ? $this->___callPlugins('setWeeeTaxRowDisposition', func_get_args(), $pluginInfo) : parent::setWeeeTaxRowDisposition($weeeTaxRowDisposition);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseWeeeTaxDisposition($baseWeeeTaxDisposition)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseWeeeTaxDisposition');
        return $pluginInfo ? $this->___callPlugins('setBaseWeeeTaxDisposition', func_get_args(), $pluginInfo) : parent::setBaseWeeeTaxDisposition($baseWeeeTaxDisposition);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseWeeeTaxRowDisposition($baseWeeeTaxRowDisposition)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseWeeeTaxRowDisposition');
        return $pluginInfo ? $this->___callPlugins('setBaseWeeeTaxRowDisposition', func_get_args(), $pluginInfo) : parent::setBaseWeeeTaxRowDisposition($baseWeeeTaxRowDisposition);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductOption()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductOption');
        return $pluginInfo ? $this->___callPlugins('getProductOption', func_get_args(), $pluginInfo) : parent::getProductOption();
    }

    /**
     * {@inheritdoc}
     */
    public function setProductOption(\Magento\Catalog\Api\Data\ProductOptionInterface $productOption)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductOption');
        return $pluginInfo ? $this->___callPlugins('setProductOption', func_get_args(), $pluginInfo) : parent::setProductOption($productOption);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo) : parent::getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(\Magento\Sales\Api\Data\OrderItemExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function isProcessingAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProcessingAvailable');
        return $pluginInfo ? $this->___callPlugins('isProcessingAvailable', func_get_args(), $pluginInfo) : parent::isProcessingAvailable();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventObject');
        return $pluginInfo ? $this->___callPlugins('getEventObject', func_get_args(), $pluginInfo) : parent::getEventObject();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo) : parent::getCustomAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('getCustomAttribute', func_get_args(), $pluginInfo) : parent::getCustomAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttributes(array $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('setCustomAttributes', func_get_args(), $pluginInfo) : parent::setCustomAttributes($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('setCustomAttribute', func_get_args(), $pluginInfo) : parent::setCustomAttribute($attributeCode, $attributeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        return $pluginInfo ? $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo) : parent::setIdFieldName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo) : parent::getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function isDeleted($isDeleted = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleted');
        return $pluginInfo ? $this->___callPlugins('isDeleted', func_get_args(), $pluginInfo) : parent::isDeleted($isDeleted);
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanges');
        return $pluginInfo ? $this->___callPlugins('hasDataChanges', func_get_args(), $pluginInfo) : parent::hasDataChanges();
    }

    /**
     * {@inheritdoc}
     */
    public function setDataChanges($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataChanges');
        return $pluginInfo ? $this->___callPlugins('setDataChanges', func_get_args(), $pluginInfo) : parent::setDataChanges($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrigData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrigData');
        return $pluginInfo ? $this->___callPlugins('getOrigData', func_get_args(), $pluginInfo) : parent::getOrigData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrigData($key = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrigData');
        return $pluginInfo ? $this->___callPlugins('setOrigData', func_get_args(), $pluginInfo) : parent::setOrigData($key, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function dataHasChangedFor($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dataHasChangedFor');
        return $pluginInfo ? $this->___callPlugins('dataHasChangedFor', func_get_args(), $pluginInfo) : parent::dataHasChangedFor($field);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceName');
        return $pluginInfo ? $this->___callPlugins('getResourceName', func_get_args(), $pluginInfo) : parent::getResourceName();
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        return $pluginInfo ? $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo) : parent::getResourceCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        return $pluginInfo ? $this->___callPlugins('getCollection', func_get_args(), $pluginInfo) : parent::getCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($modelId, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeLoad($identifier, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeLoad');
        return $pluginInfo ? $this->___callPlugins('beforeLoad', func_get_args(), $pluginInfo) : parent::beforeLoad($identifier, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        return $pluginInfo ? $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo) : parent::afterLoad();
    }

    /**
     * {@inheritdoc}
     */
    public function isSaveAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaveAllowed');
        return $pluginInfo ? $this->___callPlugins('isSaveAllowed', func_get_args(), $pluginInfo) : parent::isSaveAllowed();
    }

    /**
     * {@inheritdoc}
     */
    public function setHasDataChanges($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasDataChanges');
        return $pluginInfo ? $this->___callPlugins('setHasDataChanges', func_get_args(), $pluginInfo) : parent::setHasDataChanges($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function afterCommitCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterCommitCallback');
        return $pluginInfo ? $this->___callPlugins('afterCommitCallback', func_get_args(), $pluginInfo) : parent::afterCommitCallback();
    }

    /**
     * {@inheritdoc}
     */
    public function isObjectNew($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isObjectNew');
        return $pluginInfo ? $this->___callPlugins('isObjectNew', func_get_args(), $pluginInfo) : parent::isObjectNew($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function validateBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateBeforeSave');
        return $pluginInfo ? $this->___callPlugins('validateBeforeSave', func_get_args(), $pluginInfo) : parent::validateBeforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        return $pluginInfo ? $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo) : parent::getCacheTags();
    }

    /**
     * {@inheritdoc}
     */
    public function cleanModelCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanModelCache');
        return $pluginInfo ? $this->___callPlugins('cleanModelCache', func_get_args(), $pluginInfo) : parent::cleanModelCache();
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        return $pluginInfo ? $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo) : parent::afterDeleteCommit();
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        return $pluginInfo ? $this->___callPlugins('getResource', func_get_args(), $pluginInfo) : parent::getResource();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityId');
        return $pluginInfo ? $this->___callPlugins('getEntityId', func_get_args(), $pluginInfo) : parent::getEntityId();
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityId');
        return $pluginInfo ? $this->___callPlugins('setEntityId', func_get_args(), $pluginInfo) : parent::setEntityId($entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function clearInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearInstance');
        return $pluginInfo ? $this->___callPlugins('clearInstance', func_get_args(), $pluginInfo) : parent::clearInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoredData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoredData');
        return $pluginInfo ? $this->___callPlugins('getStoredData', func_get_args(), $pluginInfo) : parent::getStoredData();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventPrefix');
        return $pluginInfo ? $this->___callPlugins('getEventPrefix', func_get_args(), $pluginInfo) : parent::getEventPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }
}
