<?php
namespace Magento\ReCaptchaUser\Command\DisableReCaptchaForUserLoginCommand;

/**
 * Interceptor class for @see \Magento\ReCaptchaUser\Command\DisableReCaptchaForUserLoginCommand
 */
class Interceptor extends \Magento\ReCaptchaUser\Command\DisableReCaptchaForUserLoginCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ReCaptchaUser\Model\DisableReCaptchaForUserLogin $disableReCaptchaForUserLogin)
    {
        $this->___init();
        parent::__construct($disableReCaptchaForUserLogin);
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
