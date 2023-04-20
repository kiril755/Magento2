<?php

namespace Comment\CommentProductModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Comment\CommentProductModule\Model\CommentFactory;
use Magento\Framework\Console\Cli;

class ApproveComment extends Command
{
    const INPUT_KEY_ID = 'id';

    private $commentFactory;

    public function __construct(CommentFactory $commentFactory)
    {
        $this->commentFactory = $commentFactory;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('comment:approve')
            ->addArgument(
                self::INPUT_KEY_ID, InputArgument::REQUIRED, 'Comment id'
            );
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $item = $this->commentFactory->create()->load($input->getArgument(self::INPUT_KEY_ID));
        $item->setStatus('success');
        $item->save();

        return Cli::RETURN_SUCCESS;
    }
}
