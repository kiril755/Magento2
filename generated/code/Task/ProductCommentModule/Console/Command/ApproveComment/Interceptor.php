<?php
namespace Task\ProductCommentModule\Console\Command\ApproveComment;

/**
 * Interceptor class for @see \Task\ProductCommentModule\Console\Command\ApproveComment
 */
class Interceptor extends \Task\ProductCommentModule\Console\Command\ApproveComment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Task\ProductCommentModule\Model\ItemFactory $itemFactory)
    {
        $this->___init();
        parent::__construct($itemFactory);
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
