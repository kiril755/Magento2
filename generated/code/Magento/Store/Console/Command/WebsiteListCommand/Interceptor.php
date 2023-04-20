<?php
namespace Magento\Store\Console\Command\WebsiteListCommand;

/**
 * Interceptor class for @see \Magento\Store\Console\Command\WebsiteListCommand
 */
class Interceptor extends \Magento\Store\Console\Command\WebsiteListCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Api\WebsiteRepositoryInterface $websiteManagement)
    {
        $this->___init();
        parent::__construct($websiteManagement);
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
