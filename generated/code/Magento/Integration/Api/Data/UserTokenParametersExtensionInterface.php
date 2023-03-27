<?php
namespace Magento\Integration\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Integration\Api\Data\UserTokenParametersInterface
 */
interface UserTokenParametersExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\JwtUserToken\Model\Data\JwtTokenParameters|null
     */
    public function getJwtParams();

    /**
     * @param \Magento\JwtUserToken\Model\Data\JwtTokenParameters $jwtParams
     * @return $this
     */
    public function setJwtParams(\Magento\JwtUserToken\Model\Data\JwtTokenParameters $jwtParams);
}
