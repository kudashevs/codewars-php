<?php declare(strict_types=1);

namespace Katas\Tests\Kyu8\Remove_first_last_character;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Remove_first_last_character\removeChar as remove_char;

class RemoveCharTest extends TestCase
{
    public function testFixed()
    {
        $this->assertEquals('loquen', remove_char('eloquent'));
        $this->assertEquals('ountr', remove_char('country'));
        $this->assertEquals('erso', remove_char('person'));
        $this->assertEquals('lac', remove_char('place'));
    }
}
