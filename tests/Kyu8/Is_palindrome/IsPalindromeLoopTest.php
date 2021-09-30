<?php declare(strict_types=1);

namespace Katas\Tests\Kyu8\Is_palindrome;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Is_Palindrome\isPalindromeLoop as isPalindrome;

class IsPalindromeLoopTest extends TestCase
{
    public function testFixedTests()
    {
        $this->assertEquals(true, isPalindrome("a"));
        $this->assertEquals(true, isPalindrome("aba"));
        $this->assertEquals(true, isPalindrome("Abba"));
        $this->assertEquals(false, isPalindrome("hello"));
        $this->assertEquals(true, isPalindrome("Bob"));
        $this->assertEquals(true, isPalindrome("Madam"));
        $this->assertEquals(true, isPalindrome("AbBa"));
        $this->assertEquals(true, isPalindrome(""));
    }
}
