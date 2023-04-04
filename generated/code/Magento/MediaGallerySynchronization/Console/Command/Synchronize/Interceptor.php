<?php
namespace Magento\MediaGallerySynchronization\Console\Command\Synchronize;

/**
 * Interceptor class for @see \Magento\MediaGallerySynchronization\Console\Command\Synchronize
 */
class Interceptor extends \Magento\MediaGallerySynchronization\Console\Command\Synchronize implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaGallerySynchronizationApi\Api\SynchronizeInterface $synchronizeAssets)
    {
        $this->___init();
        parent::__construct($synchronizeAssets);
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
