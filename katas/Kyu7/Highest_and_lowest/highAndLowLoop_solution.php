<?php declare(strict_types=1);

namespace Katas\Kyu7\Highest_and_lowest;

function highAndLowLoop($numbers)
{
    $max = $min = $numbers[0];

    foreach (explode(' ', $numbers) as $v) {
        if ($v < $min) {
            $min = $v;
        }

        if ($v > $max) {
            $max = $v;
        }
    }

    return sprintf("%d %d", $max, $min);
}
