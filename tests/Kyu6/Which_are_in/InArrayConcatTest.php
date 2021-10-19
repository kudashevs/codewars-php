<?php

namespace Katas\Tests\Kyu6\Which_are_in;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu6\Which_are_in\inArrayConcat as inArray;

class InArrayConcatTest extends TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {
        $a2 = ["lively", "alive", "harp", "sharp", "armstrong"];
        $a1 = ["arp", "live", "strong"];
        $this->revTest(inArray($a1, $a2), ["arp", "live", "strong"]);
        $a1 = ["xyz", "live", "strong"];
        $this->revTest(inArray($a1, $a2), ["live", "strong"]);
        $a1 = ["live", "strong", "arp"];
        $this->revTest(inArray($a1, $a2), ["arp", "live", "strong"]);
    }
}
