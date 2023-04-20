<?php
namespace Magento\Developer\Console\Command\XmlCatalogGenerateCommand;

/**
 * Interceptor class for @see \Magento\Developer\Console\Command\XmlCatalogGenerateCommand
 */
class Interceptor extends \Magento\Developer\Console\Command\XmlCatalogGenerateCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Utility\Files $filesUtility, \Magento\Framework\Config\Dom\UrnResolver $urnResolver, \Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, array $formats = [])
    {
        $this->___init();
        parent::__construct($filesUtility, $urnResolver, $readFactory, $formats);
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
