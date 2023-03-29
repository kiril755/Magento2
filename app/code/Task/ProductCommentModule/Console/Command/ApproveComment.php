<?php

namespace Task\ProductCommentModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Task\ProductCommentModule\Model\ItemFactory;
use Magento\Framework\Console\Cli;

class ApproveComment extends Command
{
    const INPUT_KEY_ID = 'id';

    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('custom:comment:approve')
            ->addArgument(
                self::INPUT_KEY_ID, InputArgument::REQUIRED, 'Comment id'
            );
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $item = $this->itemFactory->create()->load($input->getArgument(self::INPUT_KEY_ID));
        $item->setStatus('success');
        $item->save();

        return Cli::RETURN_SUCCESS;
    }
}
