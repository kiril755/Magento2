<?php
namespace Magento\ReCaptchaValidation\Model\Validator;

/**
 * Interceptor class for @see \Magento\ReCaptchaValidation\Model\Validator
 */
class Interceptor extends \Magento\ReCaptchaValidation\Model\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Validation\ValidationResultFactory $validationResultFactory, \Magento\ReCaptchaValidationApi\Model\ErrorMessagesProvider $errorMessagesProvider, \Magento\ReCaptchaValidation\Model\ReCaptchaFactory $reCaptchaFactory)
    {
        $this->___init();
        parent::__construct($validationResultFactory, $errorMessagesProvider, $reCaptchaFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function isValid(string $reCaptchaResponse, \Magento\ReCaptchaValidationApi\Api\Data\ValidationConfigInterface $validationConfig) : \Magento\Framework\Validation\ValidationResult
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValid');
        return $pluginInfo ? $this->___callPlugins('isValid', func_get_args(), $pluginInfo) : parent::isValid($reCaptchaResponse, $validationConfig);
    }
}
