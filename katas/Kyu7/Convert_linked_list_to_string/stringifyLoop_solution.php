<?php declare(strict_types=1);

namespace Katas\Kyu7\Convert_linked_list_to_string;

function stringifyLoop($list): string
{
    $result = '';

    while ($list !== null) {
        $result .= $list->data . ' -> ';
        $list = $list->next;
    }

    $result .= 'NULL';

    return $result;
}
