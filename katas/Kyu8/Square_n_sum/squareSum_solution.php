<?php declare(strict_types=1);

namespace Katas\Kyu8\Square_n_sum;

function square_sum($numbers): int
{
    return array_reduce($numbers, function ($a, $v) {
        return $a + $v * $v;
    }, 0);
}
