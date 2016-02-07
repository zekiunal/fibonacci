<?php
/**
 * @author      Zeki Unal <zekiunal@gmail.com>
 * @description
 *
 * @name        FibonacciTest
 * @version     0.1
 * @created     2016/02/07 20:20
 */
class FibonacciTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param integer $a
     * @param integer $b
     *
     * @dataProvider provider
     */
    public function testGetFibonacciNumber($a, $b)
    {
        $this->assertEquals(Fibonacci::get($a), $b);
    }

    /**
     * @expectedException        OutOfRangeException
     * @expectedExceptionMessage Input must be a between 0 and 1001
     */
    public function testOutOfRangeException()
    {
        Fibonacci::get(100000);
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Application only accepts integers. Input was: string
     */
    public function testInvalidArgumentNotInteger()
    {
        Fibonacci::get("string");
    }

    /**
     * @return array
     */
    public function provider()
    {
        return array(
            array(0, 0),
            array(1, 1),
            array(2, 1),
            array(3, 2),
            array(4, 3),
            array(5, 5),
            array(6, 8),
            array(7, 13),
            array(8, 21),
            array(9, 34),
            array(10, 55),
            array(11, 89),
            array(12, 144),
            array(13, 233),
            array(14, 377),
            array(15, 610),
            array(16, 987),
            array(17, 1597),
            array(18, 2584),
            array(19, 4181),
            array(20, 6765)
        );
    }
}
