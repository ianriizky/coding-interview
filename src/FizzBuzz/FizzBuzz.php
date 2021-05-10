<?php

namespace Ianriizky\CodingInterview\FizzBuzz;

class FizzBuzz
{
    /**
     * Create a new instance class.
     *
     * @param  int  $start
     * @param  int  $end
     * @param  int  $fizz
     * @param  int  $buzz
     * @return void
     */
    public function __construct(
        protected int $start,
        protected int $end,
        protected int $fizz,
        protected int $buzz
    ) {
        //
    }

    /**
     * Create a new instance class in a static way.
     *
     * @param  int  $start
     * @param  int  $end
     * @param  int  $fizz
     * @param  int  $buzz
     * @return static
     */
    public static function make(int $start, int $end, int $fizz = 3, int $buzz = 5)
    {
        return new static($start, $end, $fizz, $buzz);
    }

    /**
     * Generate list of fizz buzz data.
     *
     * @return int[]|string[]
     */
    public function generate(): array
    {
        return array_map(function ($number) {
            switch (true) {
                case $number % $this->fizz === 0 && $number % $this->buzz === 0:
                    return 'Fizz Buzz';

                case $number % $this->fizz === 0:
                    return 'Fizz';

                case $number % $this->buzz === 0:
                    return 'Buzz';

                default:
                    return $number;
            }
        }, range($this->start, $this->end, 1));
    }
}
