<?php

namespace Katas\Tests\kyu8\Find_the_smallest_integer_in_array;

use PHPUnit\Framework\TestCase;
use function Katas\kyu8\Find_the_smallest_integer_in_array\smallestIntegerSort;

class FindTheSmallestIntegerSortTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(smallestIntegerSort([3, 5, 10, 1, 4, 55]), 1);
        $this->assertEquals(smallestIntegerSort([0]), 0);
    }
}
