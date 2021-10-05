<?php declare(strict_types=1);

namespace Katas\Kyu7\Convert_linked_list_to_string;

class Node
{
    public $data;
    public $next;

    public function __construct($data, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
