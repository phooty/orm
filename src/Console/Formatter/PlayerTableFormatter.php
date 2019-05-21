<?php
namespace Phooty\Orm\Console\Formatter;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use Phooty\Orm\Entities\Player;
use Phooty\Orm\Entities\RosterPlayer;

class PlayerTableFormatter
{
    private static $headers = [
        'Surname',
        'Given Name(s)',
        'Prior players with same name',
        'Stored roster spots (Season (Team))'
    ];

    /**
     * Output instance
     *
     * @var OutputInterface
     */
    private $output;

    /**
     * Table instance
     *
     * @var Table
     */
    private $table;

    private $booted = false;

    private $rows = [];

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    private function init()
    {
        $this->table = new Table($this->output);
        $this->table->setHeaders(static::$headers);
        $this->table->setStyle("borderless");
        $this->booted = true;
    }

    private function getRosterInfo(RosterPlayer $rp): string
    {
        return "{$rp->getSeason()} ({$rp->getTeam()->getShort()})";
    }

    private function getRosterOuput(Player $player): string
    {
        $infos = [];
        $player->getRosters()->initialize();
        foreach ($player->getRosters() as $rosterPlayer) {
            $infos[] = $this->getRosterInfo($rosterPlayer);
        }
        return implode(', ', $infos);
    }

    public function addPlayer(Player $player)
    {
        //dd(new \ReflectionClass($player->getRosters()));
        $this->rows[] = [
            $player->getSurname(),
            $player->getGivenNames(),
            $player->getPriorPlayers(),
            $this->getRosterOuput($player)
        ];
        return $this;
    }

    public function addPlayers(array $players)
    {
        foreach ($players as $player) {
            $this->addPlayer($player);
        }
        return $this;
    }

    public function render()
    {
        $this->booted ?: $this->init();
        $this->table->setRows($this->rows);
        return $this->table->render();
    }
}
