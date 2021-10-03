<?php declare(strict_types=1);

namespace katas\kyu7\Mumbling;

function accumArrayLoop($s)
{
    $parts = [];

    foreach (str_split($s) as $pos => $char) {
        $parts[] = ucfirst(str_repeat(mb_strtolower($char), $pos + 1));
    }

    return implode('-', $parts);
}
