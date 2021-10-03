<?php declare(strict_types=1);

namespace katas\kyu7\Mumbling;

function accumStringLoop($s)
{
    $result = ucfirst($s[0]);

    for ($i = 1, $len = mb_strlen($s); $i < $len; $i++) {
        $result .= '-' . ucfirst(str_repeat(mb_strtolower($s[$i]), $i + 1));
    }

    return $result;
}
