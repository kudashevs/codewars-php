<?php declare(strict_types=1);

namespace Katas\Kyu6\Stop_gninnips_my_sdrow;

function spinWordsLoop(string $str): string
{
    $res = '';

    foreach (explode(' ', $str) as $word) {
        if (mb_strlen($word) > 4) {
            $res .= strrev($word);
        } else {
            $res .= $word;
        }

        $res .= ' ';
    }

    return trim($res);
}
