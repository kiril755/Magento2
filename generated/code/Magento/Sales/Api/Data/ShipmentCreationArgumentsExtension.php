<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\ShipmentCreationArgumentsInterface
 */
class ShipmentCreationArgumentsExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShipmentCreationArgumentsExtensionInterface
{
    /**
     * @return string|null
     */
    public function getSourceCode()
    {
        return $this->_get('source_code');
    }

    /**
     * @param string $sourceCode
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        $this->setData('source_code', $sourceCode);
        return $this;
    }
}
