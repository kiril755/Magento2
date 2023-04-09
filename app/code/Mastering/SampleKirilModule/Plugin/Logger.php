<?php

namespace Mastering\SampleKirilModule\Plugin;

use Mastering\SampleKirilModule\Console\Command\AddItem;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Logger
{
    /**
     * @var OutputInterface
     */
    private $output;

    public function beforeRun(
        AddItem $command,
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln('beforeExecute');
    }

    public function aroundRun(
        AddItem $command,
        \Closure $proceed,
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln('aroundExecute before call');
        $proceed->call($command, $input, $output);
        $output->writeln('aroundExecute after call');
        $this->output = $output;
    }

    public function afterRun(AddItem $command)
    {
        $this->output->writeln('afterExecute');
    }
}
