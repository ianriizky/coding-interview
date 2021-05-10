<?php

namespace Tests\Unit;

use Ianriizky\CodingInterview\FizzBuzz\FizzBuzz;
use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * Assert that fizz buzz test has return valid data.
     *
     * @return void
     */
    public function test_assert_fizz_buzz()
    {
        $this->assertEquals(FizzBuzz::make(1, 36)->generate(), [
            1, 2, 'Fizz', 4, 'Buzz',
            'Fizz', 7, 8, 'Fizz', 'Buzz',
            11, 'Fizz', 13, 14, 'Fizz Buzz',
            16, 17, 'Fizz', 19, 'Buzz',
            'Fizz', 22, 23, 'Fizz', 'Buzz',
            26, 'Fizz', 28, 29, 'Fizz Buzz',
            31, 32, 'Fizz', 34, 'Buzz', 'Fizz',
        ]);
    }
}
