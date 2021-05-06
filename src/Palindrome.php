<?php

namespace Ianriizky\CodingInterview;

use DomainException;

class Palindrome
{
    /**
     * Palindrome method name for "reverse".
     *
     * @var string
     */
    public const METHOD_REVERSE = 'reverse';

    /**
     * Palindrome method name for "loop".
     *
     * @var string
     */
    public const METHOD_LOOP = 'loop';

    /**
     * Palindrome method name for "recursive".
     *
     * @var string
     */
    public const METHOD_RECURSIVE = 'recursive';

    /**
     * List of available palindrome method name.
     *
     * @var array
     */
    public const METHODS = [
        self::METHOD_REVERSE => 'checkUsingReverse',
        self::METHOD_LOOP => 'checkUsingLoop',
        self::METHOD_RECURSIVE => 'checkUsingRecursive',
    ];

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
     * Determine whether the given value is a palindrome or not.
     *
     * @param  string  $method
     * @return bool
     *
     * @throws \DomainException
     */
    public function check(string $method): bool
    {
        if (!in_array($method, static::METHODS, true)) {
            throw new DomainException(sprintf(
                'The given method name %s is not available.', $method
            ));
        }

        $selectedMethod = static::METHODS[$method];

        return $this->$selectedMethod();
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
