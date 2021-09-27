<?php declare(strict_types=1);

namespace Katas\Tests\kyu8\Is_Palindrome;

use PHPUnit\Framework\TestCase;
use function Katas\kyu8\Is_Palindrome\isPalindromeReverse;

class IsPalindromeReverseTest extends TestCase
{
    public function testFixedTests()
    {
        $this->assertEquals(true, isPalindromeReverse("a"));
        $this->assertEquals(true, isPalindromeReverse("aba"));
        $this->assertEquals(true, isPalindromeReverse("Abba"));
        $this->assertEquals(false, isPalindromeReverse("hello"));
        $this->assertEquals(true, isPalindromeReverse("Bob"));
        $this->assertEquals(true, isPalindromeReverse("Madam"));
        $this->assertEquals(true, isPalindromeReverse("AbBa"));
        $this->assertEquals(true, isPalindromeReverse(""));
    }
}
