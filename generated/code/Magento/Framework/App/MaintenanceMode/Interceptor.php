<?php
namespace Magento\Framework\App\MaintenanceMode;

/**
 * Interceptor class for @see \Magento\Framework\App\MaintenanceMode
 */
class Interceptor extends \Magento\Framework\App\MaintenanceMode implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, ?\Magento\Framework\Event\Manager $eventManager = null)
    {
        $this->___init();
        parent::__construct($filesystem, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function set($isOn)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'set');
        return $pluginInfo ? $this->___callPlugins('set', func_get_args(), $pluginInfo) : parent::set($isOn);
    }
}
