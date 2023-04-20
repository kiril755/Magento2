<?php
namespace Magento\ReCaptchaValidationApi\Api\Data;

/**
 * Extension class for @see \Magento\ReCaptchaValidationApi\Api\Data\ValidationConfigInterface
 */
class ValidationConfigExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ValidationConfigExtensionInterface
{
    /**
     * @return float|null
     */
    public function getScoreThreshold()
    {
        return $this->_get('scoreThreshold');
    }

    /**
     * @param float $scoreThreshold
     * @return $this
     */
    public function setScoreThreshold($scoreThreshold)
    {
        $this->setData('scoreThreshold', $scoreThreshold);
        return $this;
    }
}
