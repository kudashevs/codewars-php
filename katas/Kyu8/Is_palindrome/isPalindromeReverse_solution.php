<?php declare(strict_types=1);

namespace Katas\Kyu8\Is_palindrome;

function isPalindromeReverse($str)
{
    return ($str = mb_strtolower($str)) === strrev($str);
}
