<?php declare(strict_types=1);

namespace Katas\Kyu6\Split_strings;

function splitStringRegex($str)
{
    preg_match_all('/\w{2}/iS', $str . '_', $matches);

    return $matches[0];
}
