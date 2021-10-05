<?php declare(strict_types=1);

namespace Katas\Kyu7\Convert_linked_list_to_string;

function stringifyRecursion($list): string
{
    return is_null($list) ? 'NULL' : $list->data . ' -> ' . stringifyRecursion($list->next);
}
