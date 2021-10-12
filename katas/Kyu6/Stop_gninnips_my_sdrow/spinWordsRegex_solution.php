<?php declare(strict_types=1);

namespace Katas\Kyu6\Stop_gninnips_my_sdrow;

function spinWordsRegex(string $str): string
{
    return preg_replace_callback('/\w{5,}/iS', function ($m) {
        return strrev($m[0]);
    }, $str);
}
