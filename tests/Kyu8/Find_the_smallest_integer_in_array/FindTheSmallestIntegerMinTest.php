<?php

namespace Katas\Tests\Kyu8\Find_the_smallest_integer_in_array;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Find_the_smallest_integer_in_array\smallestIntegerMin;

class FindTheSmallestIntegerMinTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(smallestIntegerMin([3, 5, 10, 1, 4, 55]), 1);
        $this->assertEquals(smallestIntegerMin([0]), 0);
    }
}
