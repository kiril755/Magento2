<?php
namespace Magento\ReCaptchaValidationApi\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\ReCaptchaValidationApi\Api\Data\ValidationConfigInterface
 */
interface ValidationConfigExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return float|null
     */
    public function getScoreThreshold();

    /**
     * @param float $scoreThreshold
     * @return $this
     */
    public function setScoreThreshold($scoreThreshold);
}
