<?php

namespace Katas\Tests\Kyu8\Find_the_smallest_integer_in_array;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Find_the_smallest_integer_in_array\smallestIntegerSort as smallestInteger;

class FindTheSmallestIntegerSortTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(smallestInteger([3, 5, 10, 1, 4, 55]), 1);
        $this->assertEquals(smallestInteger([0]), 0);
    }
}
