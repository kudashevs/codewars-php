<?php declare(strict_types=1);

namespace Katas\Kyu8\Find_the_smallest_integer_in_array;

function smallestIntegerSort($arr)
{
    return call_user_func(function ($array) {
        sort($array);

        return $array;
    }, $arr)[0];
}
