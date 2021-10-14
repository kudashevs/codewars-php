<?php declare(strict_types=1);

namespace Katas\Kyu8\Sum_of_positive;

function positive_sum($arr)
{
    return array_sum(array_filter($arr, function ($v) {
        return $v >= 0;
    }));
}
