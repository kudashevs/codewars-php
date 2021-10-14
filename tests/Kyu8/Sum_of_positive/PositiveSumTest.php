<?php

namespace Katas\Tests\Kyu8\Sum_of_positive;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Sum_of_positive\positive_sum;

class PositiveSumTest extends TestCase
{
    public function testExamples()
    {
        $this->assertEquals(15, positive_sum([1, 2, 3, 4, 5]));
        $this->assertEquals(13, positive_sum([1, -2, 3, 4, 5]));
        $this->assertEquals(0, positive_sum([]));
        $this->assertEquals(0, positive_sum([-1, -2, -3, -4, -5]));
        $this->assertEquals(9, positive_sum([-1, 2, 3, 4, -5]));
    }
}
