<?php declare(strict_types=1);

namespace Katas\Tests\Kyu7\Vowel_count;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu7\Vowel_count\getCountIntersection as getCount;

class VowelCountIntersectionTest extends TestCase
{
    public function testBasics()
    {
        $this->assertEquals(5, getCount("abracadabra"));
    }
}
