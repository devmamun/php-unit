<?php

namespace Tests;

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_generate_roman_number_for_greater_than_zero($number, $result)
    {
        $this->assertEquals($result, RomanNumerals::generate($number));
    }

    /** 
     * @test
     * @dataProvider invalidNumber 
     */
    function it_return_false_for_less_than_one($number)
    {
        $this->assertFalse(RomanNumerals::generate($number));
    }

    public static function invalidNumber()
    {
        return [
            [-1],
            [0],
            [-23]
        ];
    }

    public static function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [8, 'VIII'],
            [18, 'XVIII'],
            [19, 'XIX'],
            [29, 'XXIX'],
            [78, 'LXXVIII'],
            [2023, 'MMXXIII']
        ];
    }
}