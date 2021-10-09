<?php declare(strict_types=1);

namespace Katas\Kyu7\Highest_and_lowest;

function highAndLowMaxMin($numbers)
{
    $chars = explode(' ', $numbers);

    return max($chars) . ' ' . min($chars);
}
