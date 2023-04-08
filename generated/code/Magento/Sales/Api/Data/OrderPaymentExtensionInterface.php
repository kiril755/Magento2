<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
 */
interface OrderPaymentExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getNotificationMessage();

    /**
     * @param string $notificationMessage
     * @return $this
     */
    public function setNotificationMessage($notificationMessage);

    /**
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface|null
     */
    public function getVaultPaymentToken();

    /**
     * @param \Magento\Vault\Api\Data\PaymentTokenInterface $vaultPaymentToken
     * @return $this
     */
    public function setVaultPaymentToken(\Magento\Vault\Api\Data\PaymentTokenInterface $vaultPaymentToken);
}
