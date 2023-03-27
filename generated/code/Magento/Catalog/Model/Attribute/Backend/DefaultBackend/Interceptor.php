<?php
namespace Magento\Catalog\Model\Attribute\Backend\DefaultBackend;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Attribute\Backend\DefaultBackend
 */
class Interceptor extends \Magento\Catalog\Model\Attribute\Backend\DefaultBackend implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Validator\HTML\WYSIWYGValidatorInterface $wysiwygValidator)
    {
        $this->___init();
        parent::__construct($wysiwygValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }
}
