<?php
namespace Magento\AsynchronousOperations\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
 */
interface OperationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getStartTime();

    /**
     * @param string $startTime
     * @return $this
     */
    public function setStartTime($startTime);
}
