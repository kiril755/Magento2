<?php
namespace Magento\AdminAdobeIms\Console\Command\AdminAdobeImsStatusCommand;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Console\Command\AdminAdobeImsStatusCommand
 */
class Interceptor extends \Magento\AdminAdobeIms\Console\Command\AdminAdobeImsStatusCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdminAdobeIms\Service\ImsConfig $adminImsConfig)
    {
        $this->___init();
        parent::__construct($adminImsConfig);
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
