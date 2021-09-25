<?php declare(strict_types=1);

namespace Katas\kyu8\Twice_as_old;

function twice_as_old($dad_years_old, $son_years_old)
{
    return abs($dad_years_old - $son_years_old * 2);
}
