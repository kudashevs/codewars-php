<?php declare(strict_types=1);

namespace Katas\Kyu7\Vowel_count;

function getCountFilter($str)
{
    return count(array_filter(str_split($str), function ($v) {
        return strpos('aeiou', $v) !== false;
    }));
}
