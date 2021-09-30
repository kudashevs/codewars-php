<?php declare(strict_types=1);

namespace Katas\Kyu7\Vowel_count;

function getCountLoop($str)
{
    $vowelsCount = 0;
    $vowels = str_split('aeiou');
    $chars = str_split($str);
    foreach ($chars as $char) {
        if (in_array($char, $vowels)) {
            $vowelsCount++;
        }
    }

    return $vowelsCount;
}
