<?php
namespace Magento\AsynchronousOperations\Api\Data;

/**
 * Extension class for @see \Magento\AsynchronousOperations\Api\Data\OperationInterface
 */
class OperationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OperationExtensionInterface
{
    /**
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->_get('start_time');
    }

    /**
     * @param string $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->setData('start_time', $startTime);
        return $this;
    }
}
