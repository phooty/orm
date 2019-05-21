<?php
namespace Phooty\Orm\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Contracts\Container\Container;
use Phooty\Orm\Entities\Player;
use Phooty\Support\OrmUtil;
use Phooty\Orm\Console\Formatter\PlayerTableFormatter;
use Phooty\Orm\Console\Formatter\PlayerStatsFormatter;

class FindPlayer extends Command
{
    private $app;

    /**
     * OrmUtil instance
     *
     * @var OrmUtil
     */
    private $orm;

    public function __construct(Container $app)
    {
        $this->app = $app;
        $this->orm = $this->app->make(OrmUtil::class);
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('find:player')
            ->setDescription(
                'Search persistance for players by name.'
            )
            ->addArgument(
                'name',
                InputArgument::IS_ARRAY,
                'Player names to search for.'
            )
            ->addOption(
                'prior',
                'p',
                InputOption::VALUE_REQUIRED,
                'Previous players with the same name.'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $names = $input->getArgument('name');
        if (empty($names)) {
            $output->writeln('No names provided.');
            return;
        }

        switch ($names) {
            case 1 === count($names):
                $data = ['surname' => $names[0]];
                break;
            case 2 === count($names):
                $data = ['surname' => $names[1], 'given_names' => $names[0]];
                break;
        }

        $results = $this->orm->findAll(Player::class, $data, function () {
            return [];
        });

        $this->outputResultCount($output, $results, $names);

        if (empty($results)) {
            return;
        }

        foreach ($results as $player) {
            $output->write(PHP_EOL);
            $output->writeln(
                "<info>{$player->getGivenNames()} {$player->getSurname()}</>"
            );

            $output->write(PHP_EOL);

            if (1 < ($prior = $player->getPriorPlayers())) {
                $output->writeln(
                    "{$prior} players with this name have previously played."
                );

                $output->write(PHP_EOL);
            } elseif (1 === ($prior = $player->getPriorPlayers())) {
                $output->writeln(
                    "{$prior} player with this name has previously played."
                );

                $output->write(PHP_EOL);
            }

            $formatter = new PlayerStatsFormatter($output, $player);
            $formatter->render();
            $output->write(PHP_EOL);
        }
    }

    private function outputResultCount(OutputInterface $output, array $results, array $names)
    {
        switch($i = count($results)) {
            case 0:
                $total = "no results";
                break;
            case 1:
                $total = "1 result";
                break;
            default:
                $total = "{$i} results";
        }

        $name = implode(" ", $names);

        return $output->writeln("<bg=black;fg=green;>Found {$total} for</><bg=black;fg=yellow;> {$name} </>");
    }

    protected function locateSurname(string $surname)
    {
        $player = $this->orm->getRepository(Player::class);
        return $player->findBy(['surname' => $surname]);
    }

    protected function locateFullName(string $surname, string $given_names, int $prior = null)
    {
        $player = $this->orm->getRepository(Player::class);
        $criteria = [
            'surname' => $surname,
            'given_names' => $given_names
        ];
        //dd($player);
        null === $prior ?: $criteria['prior_players'] = $prior;
        $result = $player->findBy($criteria);
        return empty($result) ? 'No results found' : $result;
    }
}
