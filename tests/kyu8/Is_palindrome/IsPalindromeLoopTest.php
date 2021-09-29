<?php declare(strict_types=1);

namespace Katas\Tests\kyu8\Is_palindrome;

use PHPUnit\Framework\TestCase;
use function Katas\kyu8\Is_Palindrome\isPalindromeLoop;

class IsPalindromeLoopTest extends TestCase
{
    public function testFixedTests()
    {
        $this->assertEquals(true, isPalindromeLoop("a"));
        $this->assertEquals(true, isPalindromeLoop("aba"));
        $this->assertEquals(true, isPalindromeLoop("Abba"));
        $this->assertEquals(false, isPalindromeLoop("hello"));
        $this->assertEquals(true, isPalindromeLoop("Bob"));
        $this->assertEquals(true, isPalindromeLoop("Madam"));
        $this->assertEquals(true, isPalindromeLoop("AbBa"));
        $this->assertEquals(true, isPalindromeLoop(""));
    }
}
