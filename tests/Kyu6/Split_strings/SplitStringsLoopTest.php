<?php

namespace Katas\Tests\Kyu6\Split_strings;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu6\Split_strings\splitStringLoop as solution;

class SplitStringsLoopTest extends TestCase
{
    public function testBasicTests()
    {
        $this->assertEquals(["ab", "cd", "ef"], solution("abcdef"));
        $this->assertEquals(["ab", "cd", "ef", "g_"], solution("abcdefg"));
        $this->assertEquals([], solution(""));
    }
}
