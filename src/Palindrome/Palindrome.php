<?php

namespace Ianriizky\CodingInterview\Palindrome;

class Palindrome
{
    /**
     * Create a new instance class.
     *
     * @param  string  $value
     * @return void
     */
    public function __construct(
        protected string $value
    ) {
        $this->value = $this->sanitize($value);
    }

    /**
     * Create a new instance class in a static way.
     *
     * @param  string  $value
     * @return static
     */
    public static function make(string $value)
    {
        return new static($value);
    }

    /**
     * Determine whether the given value is a palindrome or not using reverse way.
     *
     * @return bool
     */
    public function checkUsingReverse(): bool
    {
        $value = $this->value;

        $newValue = '';

        for ($index = strlen($value) - 1; $index >= 0; $index--) {
            $newValue .= $value[$index];
        }

        return $value === $newValue;
    }

    /**
     * Determine whether the given value is a palindrome or not using loop way.
     *
     * @return bool
     */
    public function checkUsingLoop(): bool
    {
        $value = $this->value;

        for ($index = 0; $index < floor(strlen($value) / 2); $index++) {
            $lastCharacterIndex = strlen($value) - ($index + 1);

            $firstCharacter = $value[$index];
            $lastCharacter = $value[$lastCharacterIndex];

            if ($firstCharacter !== $lastCharacter) {
                return false;
            }
        }

        return true;
    }

    /**
     * Determine whether the given value is a palindrome or not using recursive way.
     *
     * @param  int  $index
     * @return bool
     */
    public function checkUsingRecursive(int $index = 0): bool
    {
        $value = $this->value;

        if ($index < floor(strlen($value) / 2)) {
            $lastCharacterIndex = strlen($value) - ($index + 1);

            $firstCharacter = $value[$index];
            $lastCharacter = $value[$lastCharacterIndex];

            if ($firstCharacter !== $lastCharacter) {
                return false;
            }

            return $this->checkUsingRecursive($index + 1);
        }

        return true;
    }

    /**
     * Sanitize the given value by running some specific task.
     *
     * @return string
     */
    protected function sanitize(string $value): string
    {
        $value = str_replace(' ', '', $value);
        $value = str_replace('-', '', $value);
        $value = preg_replace('/[^A-Za-z0-9\-]/', '', $value);
        $value = mb_strtolower($value, 'UTF-8');

        return $value;
    }
}
