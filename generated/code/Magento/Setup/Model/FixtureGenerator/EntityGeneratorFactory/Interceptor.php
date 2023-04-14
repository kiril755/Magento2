<?php
namespace Magento\Setup\Model\FixtureGenerator\EntityGeneratorFactory;

/**
 * Interceptor class for @see \Magento\Setup\Model\FixtureGenerator\EntityGeneratorFactory
 */
class Interceptor extends \Magento\Setup\Model\FixtureGenerator\EntityGeneratorFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Setup\\Model\\FixtureGenerator\\EntityGenerator')
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
