<?php declare(strict_types=1);

namespace Katas\Kyu8\Find_the_smallest_integer_in_array;

function smallestIntegerLoop($arr)
{
    $min = array_shift($arr);

    foreach ($arr as $v) {
        if ($v < $min) {
            $min = $v;
        }
    }

    return $min;
}
