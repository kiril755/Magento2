<?php
namespace Magento\Eav\Model\Entity\Attribute\Backend\Datetime;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Backend\Datetime
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Backend\Datetime implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate)
    {
        $this->___init();
        parent::__construct($localeDate);
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
