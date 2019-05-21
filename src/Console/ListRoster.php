<?php
namespace Phooty\Orm\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
//use Symfony\Component\Console\Input\InputOption;
use Illuminate\Contracts\Container\Container;
use Doctrine\ORM\EntityManager;
use Phooty\Crawler\Support\TeamResolver;

class ListRoster extends Command
{
    /**
     * The container instance
     *
     * @var Container
     */
    private $container;
    
    public function __construct(Container $container)
    {
        $this->container = $container;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('list:roster')
            ->setDescription(
                'List a season\'s roster for a team.'
            )
            ->addArgument(
                'team',
                InputArgument::REQUIRED,
                'The team name or alias'
            )
            ->addArgument(
                'season',
                InputArgument::REQUIRED,
                'The season the roster belongs to'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $resolver = $this->container->make(TeamResolver::class);
        $tn = $input->getArgument('team');
        $season = $input->getArgument('season');

        // validate args, swap if needed
        if (preg_match('/\D/', $season)) {
            if (preg_match('/\D/', $tn)) {
                $output->writeln("Invalid arguments");
                return;
            }
            $old = $season;
            $season = $tn;
            $tn = $old;
        }

        if (!($team = $resolver->resolve($tn))) {
            $output->writeln("<error>Could not find the team {$tn}</error>");
            return;
        }
        dd($team);
        $output->writeln('Located file...');
        $output->writeln('Reading content...');

        $em = $this->container->make(EntityManager::class);

    }

}
