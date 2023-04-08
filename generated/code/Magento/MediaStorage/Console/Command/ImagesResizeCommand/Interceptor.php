<?php
namespace Magento\MediaStorage\Console\Command\ImagesResizeCommand;

/**
 * Interceptor class for @see \Magento\MediaStorage\Console\Command\ImagesResizeCommand
 */
class Interceptor extends \Magento\MediaStorage\Console\Command\ImagesResizeCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\MediaStorage\Service\ImageResize $imageResize, \Magento\MediaStorage\Service\ImageResizeScheduler $imageResizeScheduler, \Symfony\Component\Console\Helper\ProgressBarFactory $progressBarFactory)
    {
        $this->___init();
        parent::__construct($appState, $imageResize, $imageResizeScheduler, $progressBarFactory);
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
