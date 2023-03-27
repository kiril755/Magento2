<?php
namespace Magento\PageCache\Console\Command\GenerateVclCommand;

/**
 * Interceptor class for @see \Magento\PageCache\Console\Command\GenerateVclCommand
 */
class Interceptor extends \Magento\PageCache\Console\Command\GenerateVclCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\PageCache\Model\VclGeneratorInterfaceFactory $vclGeneratorFactory, \Magento\Framework\Filesystem\File\WriteFactory $writeFactory, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Serialize\Serializer\Json $serializer)
    {
        $this->___init();
        parent::__construct($vclGeneratorFactory, $writeFactory, $scopeConfig, $serializer);
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
