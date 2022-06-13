<?php

class ScoreService
{
    private array $levels = array(
        1 => 0,
        2 => 500,
        3 => 1000,
        4 => 2000,
        5 => 4000,
        6 => 7000,
        7 => 10000,
        8 => 15000,
        9 => 20000,
        10 => 25000,
    );

    public function getNextScoreByLevel(int $level): int
    {
        return $this->levels[$level + 1];
    }

    public function getLevelByScore(int $score): int
    {
        foreach ($this->levels as $k => $sc) {
            if ($sc <= $score && $score < $this->levels[$k + 1]) {
                return $k;
            }
        }
        return 0;
    }
}