<?php

namespace Katas\Tests\kyu8\Twice_as_old;

use PHPUnit\Framework\TestCase;
use function Katas\kyu8\Twice_as_old\twice_as_old;

class TwiceAsOldTest extends TestCase
{
    public function testBasicTests()
    {
        $this->assertEquals(twice_as_old(36, 7), 22);
        $this->assertEquals(twice_as_old(55, 30), 5);
        $this->assertEquals(twice_as_old(42, 21), 0);
        $this->assertEquals(twice_as_old(22, 1), 20);
        $this->assertEquals(twice_as_old(29, 0), 29);
    }
}
