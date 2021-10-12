<?php declare(strict_types=1);

namespace Katas\Kyu6\Stop_gninnips_my_sdrow;

function spinWordsMap(string $str): string
{
    return implode(
        ' ',
        array_map(function ($v) {
            return (mb_strlen($v) > 4) ? strrev($v) : $v;
        }, explode(' ', $str))
    );
}
