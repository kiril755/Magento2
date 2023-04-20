<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentInterface
 */
interface ShipmentExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getSourceCode();

    /**
     * @param string $sourceCode
     * @return $this
     */
    public function setSourceCode($sourceCode);
}
