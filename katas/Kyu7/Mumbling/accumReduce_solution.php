<?php declare(strict_types=1);

namespace katas\kyu7\Mumbling;

function accumReduce($s)
{
    return implode('-', array_reduce(str_split($s), function ($acc, $v) {
        static $c = 1; // it can be imported through use() construct
        $acc[] = ucfirst(str_repeat(mb_strtolower($v), $c++));
        return $acc;
    }, []));
}
