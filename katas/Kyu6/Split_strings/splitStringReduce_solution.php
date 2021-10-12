<?php declare(strict_types=1);

namespace Katas\Kyu6\Split_strings;

function splitStringReduce($str)
{
    return array_reduce(
        array_filter(str_split($str, 2)),
        function ($acc, $v) {
            $acc[] = (strlen($v) < 2) ? $v .= '_' : $v;

            return $acc;
        },
        []
    );
}
