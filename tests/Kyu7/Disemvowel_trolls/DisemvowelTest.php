<?php declare(strict_types=1);

namespace Katas\Tests\Kyu7\Disemvowel_trolls;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu7\Disemvowel_trolls\disemvowel;

class DisemvowelTest extends TestCase
{
    public function testFixed()
    {
        $this->assertEquals(
            "Ths wbst s fr lsrs LL!",
            disemvowel("This website is for losers LOL!")
        );
        $this->assertEquals(
            "N ffns bt,\nYr wrtng s mng th wrst 'v vr rd",
            disemvowel("No offense but,\nYour writing is among the worst I've ever read")
        );
        $this->assertEquals(
            "Wht r y,  cmmnst?",
            disemvowel("What are you, a communist?")
        );
    }
}
