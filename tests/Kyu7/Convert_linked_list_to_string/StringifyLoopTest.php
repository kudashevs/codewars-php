<?php

namespace Katas\Tests\Kyu7\Convert_linked_list_to_string;

use Katas\Kyu7\Convert_linked_list_to_string\Node;
use PHPUnit\Framework\TestCase;
use function Katas\Kyu7\Convert_linked_list_to_string\stringifyLoop as stringify;

class StringifyLoopTest extends TestCase
{
    public function testDescriptionExamples()
    {
        $this->assertEquals("1 -> 2 -> 3 -> NULL", stringify(new Node(1, new Node(2, new Node(3)))));
        $this->assertEquals("0 -> 1 -> 4 -> 9 -> 16 -> NULL", stringify(new Node(0, new Node(1, new Node(4, new Node(9, new Node(16)))))));
        $this->assertEquals("NULL", stringify(null));
    }
}
