<?php
namespace Phooty\Orm\Support;

use Phooty\Orm\Entities\SeasonStats;

class SeasonStatsToArray
{
    public static function convert(SeasonStats $seasonStats): array
    {
        return [
            'games' => $seasonStats->getGames(),
            'kicks' => $seasonStats->getKicks(),
            'marks' => $seasonStats->getMarks(),
            'handballs' => $seasonStats->getHandballs(),
            'disposals' => $seasonStats->getDisposals(),
            'goals' => $seasonStats->getGoals(),
            'behinds' => $seasonStats->getBehinds(),
            'hitouts' => $seasonStats->getHitouts(),
            'tackles' => $seasonStats->getTackles(),
            'rebound_50' => $seasonStats->getRebound50(),
            'inside_50' => $seasonStats->getInside50(),
            'clearances' => $seasonStats->getClearances(),
            'clangers' => $seasonStats->getClangers(),
            'frees_for' => $seasonStats->getFreesFor(),
            'frees_against' => $seasonStats->getFreesAgainst(),
            'brownlow_votes' => $seasonStats->getBrownlowVotes(),
            'contested_possessions' => $seasonStats->getContestedPossessions(),
            'uncontested_possessions' => $seasonStats->getUncontestedPossessions(),
            'contested_marks' => $seasonStats->getContestedMarks(),
            'marks_inside_50' => $seasonStats->getMarksInside50(),
            'one_percenters' => $seasonStats->getOnePercenters(),
            'bounces' => $seasonStats->getBounces(),
            'goal_assists' => $seasonStats->getGoalAssists(),
            'time_on_ground' => $seasonStats->getTimeOnGround(),
        ];
    }
}
