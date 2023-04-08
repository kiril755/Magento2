<?php
namespace Magento\Sales\Console\Command\EncryptionPaymentDataUpdateCommand;

/**
 * Interceptor class for @see \Magento\Sales\Console\Command\EncryptionPaymentDataUpdateCommand
 */
class Interceptor extends \Magento\Sales\Console\Command\EncryptionPaymentDataUpdateCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Order\Payment\EncryptionUpdate $paymentResource)
    {
        $this->___init();
        parent::__construct($paymentResource);
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
