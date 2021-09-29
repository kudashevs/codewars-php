<?php declare(strict_types=1);

namespace Katas\kyu8\Is_palindrome;

function isPalindromeLoop($str)
{
    $str = mb_strtolower($str);
    $firstIndex = 0;
    $lastIndex = mb_strlen($str) - 1;

    while ($firstIndex < $lastIndex) {
        if ($str[$firstIndex] !== $str[$lastIndex]) {
            return false;
        }

        $firstIndex++;
        $lastIndex--;
    }

    return true;
}
