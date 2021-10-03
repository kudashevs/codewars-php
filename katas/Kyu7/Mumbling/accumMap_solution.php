<?php declare(strict_types=1);

namespace katas\kyu7\Mumbling;

function accumMap($s)
{
    return implode('-', array_map(function ($v, $i) {
        return mb_strtoupper($v) . str_repeat(mb_strtolower($v), $i);
    }, str_split($s), array_keys(str_split($s))));
}
