<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ArraySortTest extends TestCase
{
    public function testNaturalSort()
    {
        $testArray = [
            '0' => 'ahoj1',
            '1' => 'Ahoj10',
            '2' => 'ahoj12',
            '3' => 'Ahoj2',
            '4' => 'ahoj3',
            ];

        $finalArray = [
            '0' => 'ahoj1',
            '3' => 'Ahoj2',
            '4' => 'ahoj3',
            '1' => 'Ahoj10',
            '2' => 'ahoj12',
            ];
            
        $sorter = new App\ArraySort($testArray);
        $this->assertEquals($finalArray, $sorter->naturalOrderSorting());
    }
}