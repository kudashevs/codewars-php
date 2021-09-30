<?php declare(strict_types=1);

namespace Katas\Kyu7\Vowel_count;

function getCountRegex($str)
{
    return preg_match_all('/[aeiou]/iS', $str);
}
