<?php declare(strict_types=1);

namespace Katas\Kyu8\Remove_first_last_character;

function removeChar(string $s): string
{
    return substr($s, 1, -1);
}
