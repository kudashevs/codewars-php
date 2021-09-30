<?php declare(strict_types=1);

namespace Katas\Kyu8\Reversed_words;

function reverseWords($str)
{
    $arr = explode(' ', $str);
    $arr = array_reverse($arr);

    return implode(' ', $arr);
}
