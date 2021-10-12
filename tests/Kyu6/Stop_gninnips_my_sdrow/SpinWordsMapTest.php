<?php

namespace Katas\Tests\Kyu6\Stop_gninnips_my_sdrow;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu6\Stop_gninnips_my_sdrow\spinWordsMap as spinWords;

class SpinWordsMapTest extends TestCase
{
    public function testBasicTests()
    {
        $this->assertEquals("emocleW", spinWords("Welcome"));
        $this->assertEquals("Hey wollef sroirraw", spinWords("Hey fellow warriors"));
        $this->assertEquals("This is a test", spinWords("This is a test"));
        $this->assertEquals("This is rehtona test", spinWords("This is another test"));
        $this->assertEquals("You are tsomla to the last test", spinWords("You are almost to the last test"));
        $this->assertEquals("Just gniddik ereht is llits one more", spinWords("Just kidding there is still one more"));
        $this->assertEquals("ylsuoireS this is the last one", spinWords("Seriously this is the last one"));
    }
}
