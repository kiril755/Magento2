<?php
namespace Magento\MediaStorage\Model\File\Storage\SynchronizationFactory;

/**
 * Interceptor class for @see \Magento\MediaStorage\Model\File\Storage\SynchronizationFactory
 */
class Interceptor extends \Magento\MediaStorage\Model\File\Storage\SynchronizationFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, string $instanceName = '\\Magento\\MediaStorage\\Model\\File\\Storage\\Synchronization')
    {
        $this->___init();
        parent::__construct($objectManager, $instanceName);
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($data);
    }
}
