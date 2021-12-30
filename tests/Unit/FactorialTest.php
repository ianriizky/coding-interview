<?php

namespace Tests\Unit;

use Ianriizky\CodingInterview\Factorial\Factorial;
use Tests\TestCase;

class FactorialTest extends TestCase
{
    protected array $factorials = [
        0 => 1,
        1 => 1,
        2 => 2,
        3 => 6,
        4 => 24,
        5 => 120,
        6 => 720,
        7 => 5040,
        8 => 40320,
        9 => 362880,
        10 => 3628800,
        11 => 39916800,
        12 => 479001600,
        13 => 6227020800,
        14 => 87178291200,
        15 => 1307674368000,
        16 => 20922789888000,
        17 => 355687428096000,
        18 => 6402373705728000,
        19 => 121645100408832000,
        20 => 2432902008176640000,
    ];

    /**
     * Assert that factorial class with loop is run correctly.
     *
     * @return void
     */
    public function test_factorial_with_loop()
    {
        foreach ($this->factorials as $n => $factorial) {
            $this->assertEquals($factorial, (new Factorial($n))->resultWithLoop());
        }
    }

    /**
     * Assert that factorial class with recursive is run correctly.
     *
     * @return void
     */
    public function test_factorial_with_recursive()
    {
        foreach ($this->factorials as $n => $factorial) {
            $this->assertEquals($factorial, (new Factorial($n))->resultWithRecursive());
        }
    }

    /**
     * Assert that factorial class with tail recursive is run correctly.
     *
     * @return void
     */
    public function test_factorial_with_tail_recursive()
    {
        foreach ($this->factorials as $n => $factorial) {
            $this->assertEquals($factorial, (new Factorial($n))->resultWithTailRecursive());
        }
    }
}
