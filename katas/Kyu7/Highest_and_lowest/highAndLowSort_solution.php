<?php declare(strict_types=1);

namespace Katas\Kyu7\Highest_and_lowest;

function highAndLowSort($numbers)
{
    $chars = explode(' ', $numbers);

    sort($chars);

    return end($chars) . ' ' . reset($chars);
}
