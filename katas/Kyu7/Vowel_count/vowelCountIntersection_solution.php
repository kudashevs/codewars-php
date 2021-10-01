<?php declare(strict_types=1);

namespace Katas\Kyu7\Vowel_count;

function getCountIntersection($str)
{
    $vowels = str_split('aeiou');
    $chars = str_split($str);

    return count(array_intersect($chars, $vowels));
}
