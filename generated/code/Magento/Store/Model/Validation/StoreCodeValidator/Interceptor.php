<?php
namespace Magento\Store\Model\Validation\StoreCodeValidator;

/**
 * Interceptor class for @see \Magento\Store\Model\Validation\StoreCodeValidator
 */
class Interceptor extends \Magento\Store\Model\Validation\StoreCodeValidator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Validator\RegexFactory $regexValidatorFactory)
    {
        $this->___init();
        parent::__construct($regexValidatorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValid');
        return $pluginInfo ? $this->___callPlugins('isValid', func_get_args(), $pluginInfo) : parent::isValid($value);
    }
}
