<?php declare(strict_types=1);

namespace Katas\Kyu6\Split_strings;

function splitStringSplit($str)
{
    if (empty($str)) {
        return [];
    }

    if ((strlen($str) % 2) !== 0) {
        $str .= '_';
    }

    return str_split($str, 2);
}
