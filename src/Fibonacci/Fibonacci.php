<?php
/**
 * @author      Zeki Unal <zekiunal@gmail.com>
 * @description This is Fibonacci class for get nTh number fetching with memoization method.
 *              the Fibonacci sequence up to a specified value using a generator
 *
 * @name        Fibonacci
 * @version     0.1
 * @created     2016/02/07 20:20
 */
class Fibonacci
{
    /**
     * maximum value of calculate fibonacci number
     */
    const MAX = 1001;

    /**
     * @var array
     */
    protected static $cache = [
        '0' => 0,
        '1' => 1
    ];

    /**
     * @param integer $n
     *
     * @return integer
     */
    public static function get($n)
    {
        if (isset(self::$cache[$n]))
        {
            return self::$cache[$n];
        }
        
        self::validate($n);
        
        foreach (Fibonacci::sequence($n + 1) as $key => $number) {
            self::$cache[$key] = $number;
        };

        return self::$cache[$n];
    }

    /**
     * @param integer $n
     *
     * @return Generator
     */
    protected static function sequence($n)
    {
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $n; $i++) {
            yield $a;
            $a = $b - $a;
            $b = $a + $b;
        }
    }

    /**
     * @param integer $n
     */
    protected static function validate($n)
    {
        if (!is_integer($n)) {
            throw new InvalidArgumentException('Application only accepts integers. Input was: ' . $n);
        }

        if ($n < 0 or $n > Fibonacci::MAX) {
            throw new OutOfRangeException('Input must be a between 0 and ' . Fibonacci::MAX);
        }
    }
}
