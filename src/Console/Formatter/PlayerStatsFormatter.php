<?php
namespace Phooty\Orm\Console\Formatter;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use Phooty\Orm\Entities\Player;
use Phooty\Orm\Support\SeasonStatsToArray;

class PlayerStatsFormatter
{
    private static $headers = [
        'yr',
        'tm',
        'gm',
        'ki',
        'mk',
        'hb',
        'pos',
        'gl',
        'bhd',
        'ho',
        'tkl',
        'r50',
        'i50',
        'clr',
        'clg',
        'ff',
        'fa',
        'vts',
        'cp',
        'up',
        'cm',
        'm50',
        '1p',
        'bn',
        'ga',
        'tog',
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

    /**
     * The Player instance
     *
     * @var Player
     */
    private $player;

    public function __construct(OutputInterface $output, Player $player)
    {
        $this->output = $output;
        $this->player = $player;
    }

    private function init()
    {
        $this->table = new Table($this->output);
        $this->table->setHeaders(static::$headers);
        $this->table->setStyle("borderless");
        $this->booted = true;
    }

    private function preparePlayerData()
    {
        $rosters = $this->player->getRosters();
        //dd((new \ReflectionClass($rosters))->getMethods());
        foreach ($rosters as $roster) {
            $this->rows[] = array_merge(
                [$roster->getSeason(), $roster->getTeam()->getShort()],
                SeasonStatsToArray::convert($roster->getSeasonStats())
            );
        }
        sort($this->rows);
    }

    public function render()
    {
        $this->booted ?: $this->init();
        $this->preparePlayerData();
        $this->table->setRows($this->rows);
        return $this->table->render();
    }
}
