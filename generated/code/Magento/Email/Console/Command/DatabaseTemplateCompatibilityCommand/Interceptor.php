<?php
namespace Magento\Email\Console\Command\DatabaseTemplateCompatibilityCommand;

/**
 * Interceptor class for @see \Magento\Email\Console\Command\DatabaseTemplateCompatibilityCommand
 */
class Interceptor extends \Magento\Email\Console\Command\DatabaseTemplateCompatibilityCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Email\Model\Template\VariableCompatibilityChecker $compatibilityChecker, \Magento\Email\Model\ResourceModel\Template\CollectionFactory $templateCollection, ?string $name = null)
    {
        $this->___init();
        parent::__construct($compatibilityChecker, $templateCollection, $name);
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
