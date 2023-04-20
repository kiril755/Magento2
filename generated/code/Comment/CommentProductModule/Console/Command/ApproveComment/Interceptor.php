<?php
namespace Comment\CommentProductModule\Console\Command\ApproveComment;

/**
 * Interceptor class for @see \Comment\CommentProductModule\Console\Command\ApproveComment
 */
class Interceptor extends \Comment\CommentProductModule\Console\Command\ApproveComment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Comment\CommentProductModule\Model\CommentFactory $commentFactory)
    {
        $this->___init();
        parent::__construct($commentFactory);
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
