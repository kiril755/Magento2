<?php
namespace Magento\Framework\Archive\Zip;

/**
 * Interceptor class for @see \Magento\Framework\Archive\Zip
 */
class Interceptor extends \Magento\Framework\Archive\Zip implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function pack($source, $destination)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'pack');
        return $pluginInfo ? $this->___callPlugins('pack', func_get_args(), $pluginInfo) : parent::pack($source, $destination);
    }

    /**
     * {@inheritdoc}
     */
    public function unpack($source, $destination)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unpack');
        return $pluginInfo ? $this->___callPlugins('unpack', func_get_args(), $pluginInfo) : parent::unpack($source, $destination);
    }
}
