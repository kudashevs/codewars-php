<?php declare(strict_types=1);

namespace Katas\Tests\Kyu8\Reversed_words;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Reversed_Words\reverseWords;

class ReverseWordsTest extends TestCase
{
    public function testFixedTests()
    {
        $this->assertEquals("world! hello", reverseWords("hello world!"));
        $this->assertEquals("this like speak doesn't yoda", reverseWords("yoda doesn't speak like this"));
        $this->assertEquals("foobar", reverseWords("foobar"));
        $this->assertEquals("editor kata", reverseWords("kata editor"));
        $this->assertEquals("boat your row row row", reverseWords("row row row your boat"));
    }
}
