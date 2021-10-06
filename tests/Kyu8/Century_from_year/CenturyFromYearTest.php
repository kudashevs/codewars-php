<?php

namespace Katas\Tests\Kyu8\Century_from_year;

use PHPUnit\Framework\TestCase;
use function Katas\Kyu8\Century_from_year\centuryFromYear;

class CenturyFromYearTest extends TestCase
{
    public function testExamples()
    {
        $this->assertEquals(18, centuryFromYear(1705));
        $this->assertEquals(19, centuryFromYear(1900));
        $this->assertEquals(17, centuryFromYear(1601));
        $this->assertEquals(20, centuryFromYear(2000));
    }
}
