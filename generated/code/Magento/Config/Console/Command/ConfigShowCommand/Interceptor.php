<?php
namespace Magento\Config\Console\Command\ConfigShowCommand;

/**
 * Interceptor class for @see \Magento\Config\Console\Command\ConfigShowCommand
 */
class Interceptor extends \Magento\Config\Console\Command\ConfigShowCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Scope\ValidatorInterface $scopeValidator, \Magento\Framework\App\Config\ConfigSourceInterface $configSource, \Magento\Framework\App\Config\ConfigPathResolver $pathResolver, \Magento\Config\Console\Command\ConfigShow\ValueProcessor $valueProcessor, ?\Magento\Config\Model\Config\PathValidatorFactory $pathValidatorFactory = null, ?\Magento\Config\Console\Command\EmulatedAdminhtmlAreaProcessor $emulatedAreaProcessor = null)
    {
        $this->___init();
        parent::__construct($scopeValidator, $configSource, $pathResolver, $valueProcessor, $pathValidatorFactory, $emulatedAreaProcessor);
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
