<?php declare(strict_types=1);

namespace Katas\Kyu6\Split_strings;

function splitStringLoop($str)
{
    $chars = str_split($str);
    $result = [];

    while ($cur = current($chars)) {
        $next = next($chars);
        $result[] = $cur . (($next) ?: '_');
        next($chars);
    }

    return $result;
}
