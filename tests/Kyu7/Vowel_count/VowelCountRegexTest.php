<?php declare(strict_types=1);

namespace Katas\Tests\Kyu7\Vowel_count;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu7\Vowel_count\getCountRegex as getCount;

class VowelCountRegexTest extends TestCase
{
    public function testBasics()
    {
        $this->assertEquals(5, getCount("abracadabra"));
    }
}
