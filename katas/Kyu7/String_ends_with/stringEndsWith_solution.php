<?php declare(strict_types=1);

namespace Katas\Kyu7\String_ends_with;

function stringEndsWith($str, $ending)
{
    $stringLength = mb_strlen($str);
    $endingLength = mb_strlen($ending);

    return $stringLength >= $endingLength && substr($str, $stringLength - $endingLength) === $ending;
}
