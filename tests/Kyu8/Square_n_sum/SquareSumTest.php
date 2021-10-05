<?php

namespace Katas\Tests\Kyu8\Square_n_sum;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Square_n_sum\square_sum;

class SquareSumTest extends TestCase
{
    public function testBasic()
    {
        $this->assertEquals(square_sum([1, 2]), 5);
        $this->assertEquals(square_sum([0, 3, 4, 5]), 50);
        $this->assertEquals(square_sum([]), 0);
        $this->assertEquals(square_sum([-1, -2]), 5);
        $this->assertEquals(square_sum([-1, 0, 1]), 2);
    }
}
