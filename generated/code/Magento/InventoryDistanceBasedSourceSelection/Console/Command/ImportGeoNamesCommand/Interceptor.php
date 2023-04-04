<?php
namespace Magento\InventoryDistanceBasedSourceSelection\Console\Command\ImportGeoNamesCommand;

/**
 * Interceptor class for @see \Magento\InventoryDistanceBasedSourceSelection\Console\Command\ImportGeoNamesCommand
 */
class Interceptor extends \Magento\InventoryDistanceBasedSourceSelection\Console\Command\ImportGeoNamesCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryDistanceBasedSourceSelection\Model\ImportGeoNames $importGeoNames, ?string $name = null)
    {
        $this->___init();
        parent::__construct($importGeoNames, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
