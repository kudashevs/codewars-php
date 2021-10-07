<?php

namespace Katas\Tests\Kyu7\Highest_and_lowest;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu7\Highest_and_lowest\highAndLowLoop as highAndLow;

class HighAndLowLoopTest extends TestCase
{
    public function testSampleTests()
    {
        $this->assertEquals("42 -9", highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));
    }
}
