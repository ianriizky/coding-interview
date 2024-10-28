<?php

namespace Ianriizky\CodingInterview\Factorial;

class Factorial
{
    /**
     * Temporary value for the recursive value.
     */
    protected int $result = 1;

    /**
     * Create a new instance class.
     *
     * @return void
     */
    public function __construct(protected int $initialN)
    {
        //
    }

    /**
     * Return result of the factorial using loop way.
     */
    public function resultWithLoop(): int
    {
        if ($this->initialN <= 1) {
            return 1;
        }

        $result = 1;

        for ($n = $this->initialN; $n >= 1; $n--) {
            $result *= $n;
        }

        return $result;
    }

    /**
     * Return result of the factorial using recursive way.
     */
    public function resultWithRecursive(): int
    {
        if ($this->initialN <= 1) {
            return 1;
        }

        $n = $this->initialN;

        return $n * $this->resultWithRecursive($this->initialN = $n - 1);
    }

    /**
     * Return result of the factorial using tail recursive way.
     */
    public function resultWithTailRecursive(): int
    {
        if ($this->initialN <= 0) {
            return $this->result;
        }

        $this->result *= $this->initialN;
        $this->initialN--;

        return $this->resultWithTailRecursive();
    }
}
