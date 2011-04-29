<?php
namespace Acme\AKB48Bundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Finder\Finder;

use Symfony\Bundle\FrameworkBundle\Command\Command;

/**
 * AKB48 Command
 *
 * @author hidenorigoto <hidenorigoto@gmail.com>
 */
class AKB48Command extends Command
{
    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setName('akb48:list')
            ->setDescription('list members')
            ->setHelp(<<<EOF
list members
EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln('test');
    }
}
