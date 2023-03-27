<?php
namespace Magento\AdminAdobeIms\Console\Command\AdminAdobeImsEnableCommand;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Console\Command\AdminAdobeImsEnableCommand
 */
class Interceptor extends \Magento\AdminAdobeIms\Console\Command\AdminAdobeImsEnableCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdminAdobeIms\Service\ImsConfig $adminImsConfig, \Magento\AdminAdobeIms\Model\ImsConnection $adminImsConnection, \Magento\AdminAdobeIms\Service\ImsCommandOptionService $imsCommandOptionService, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\AdminAdobeIms\Service\UpdateTokensService $updateTokensService)
    {
        $this->___init();
        parent::__construct($adminImsConfig, $adminImsConnection, $imsCommandOptionService, $cacheTypeList, $updateTokensService);
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
