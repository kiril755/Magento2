<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace PayPal\Braintree\Observer;

use Magento\Framework\Event\Observer;
use Magento\Payment\Observer\AbstractDataAssignObserver;
use Magento\Quote\Api\Data\PaymentInterface;

class DataAssignObserver extends AbstractDataAssignObserver
{
    public const PAYMENT_METHOD_NONCE = 'payment_method_nonce';
    public const DEVICE_DATA = 'device_data';
    public const CAPTCHA_RESPONSE = 'g-recaptcha-response';

    /**
     * @var array
     */
    protected $additionalInformationList = [
        self::PAYMENT_METHOD_NONCE,
        self::DEVICE_DATA,
        self::CAPTCHA_RESPONSE
    ];

    /**
     * Assign additional payment information
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $data = $this->readDataArgument($observer);

        $additionalData = $data->getData(PaymentInterface::KEY_ADDITIONAL_DATA);
        if (!is_array($additionalData)) {
            return;
        }

        $paymentInfo = $this->readPaymentModelArgument($observer);

        foreach ($this->additionalInformationList as $additionalInformationKey) {
            if (isset($additionalData[$additionalInformationKey])) {
                $paymentInfo->setAdditionalInformation(
                    $additionalInformationKey,
                    $additionalData[$additionalInformationKey]
                );
            }
        }
    }
}
