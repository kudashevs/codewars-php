<?php declare(strict_types=1);

namespace Katas\Kyu6\Which_are_in;

function inArrayConcat($array1, $array2)
{
    $str = implode(' ', $array2);

    sort($array1);

    return array_values(array_filter($array1, function ($v) use ($str) {
        return strpos($str, $v) !== false;
    }));
}
