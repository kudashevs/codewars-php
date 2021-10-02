<?php declare(strict_types=1);

namespace Katas\Kyu7\Disemvowel_trolls;

function disemvowel($str)
{
    return preg_replace('/[aeiou]/iSu', '', $str);
}
