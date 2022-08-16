<?php
namespace I95Learning\AddCmdLine\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class ExampleCmd extends command
{
    const NAME = 'name';
    protected function configure()
    {
        $options = [
            new InputOption(
                self::NAME,
                null,
                InputOption::VALUE_REQUIRED,
                'Name'
            )
        ];
        $this->setName('example:Command');
        $this->setDescription('Demo command line');
        $this->setDefinition($options);

        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $output->writeln("Cmd is running successfully");

        if ($name = $input->getOption(self::NAME)) {

            $output->writeln("Hello " . $name);


        } else {

            $output->writeln("Cmd is running successfully");

        }

        return $this;
    }
}
