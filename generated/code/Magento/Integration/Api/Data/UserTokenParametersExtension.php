<?php
namespace Magento\Integration\Api\Data;

/**
 * Extension class for @see \Magento\Integration\Api\Data\UserTokenParametersInterface
 */
class UserTokenParametersExtension extends \Magento\Framework\Api\AbstractSimpleObject implements UserTokenParametersExtensionInterface
{
    /**
     * @return \Magento\JwtUserToken\Model\Data\JwtTokenParameters|null
     */
    public function getJwtParams()
    {
        return $this->_get('jwt_params');
    }

    /**
     * @param \Magento\JwtUserToken\Model\Data\JwtTokenParameters $jwtParams
     * @return $this
     */
    public function setJwtParams(\Magento\JwtUserToken\Model\Data\JwtTokenParameters $jwtParams)
    {
        $this->setData('jwt_params', $jwtParams);
        return $this;
    }
}
