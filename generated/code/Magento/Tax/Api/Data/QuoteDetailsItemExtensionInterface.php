<?php
namespace Magento\Tax\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Tax\Api\Data\QuoteDetailsItemInterface
 */
interface QuoteDetailsItemExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return float|null
     */
    public function getPriceForTaxCalculation();

    /**
     * @param float $priceForTaxCalculation
     * @return $this
     */
    public function setPriceForTaxCalculation($priceForTaxCalculation);
}
