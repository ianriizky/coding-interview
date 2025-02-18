<?php

namespace Ianriizky\CodingInterview\DataSet;

use SplFixedArray;

class DataSet
{
    /**
     * Current size of the collection.
     */
    protected int $size = 0;

    /**
     * Collection of the data set.
     */
    protected SplFixedArray $collection;

    /**
     * Create a new instance class.
     *
     * @return void
     */
    public function __construct(int $initialSize = 10)
    {
        $this->collection = new SplFixedArray($initialSize);
    }

    /**
     * Add a value to the collection.
     *
     * @param  mixed  $value
     */
    public function add($value): bool
    {
        if ($this->contains($value)) {
            return false;
        }

        $this->ensureSize();

        $this->collection[$this->size] = $value;
        $this->size++;

        return true;
    }

    /**
     * Determine whether the given value is exists on the collection or not.
     *
     * @param  mixed  $value
     */
    public function contains($value): bool
    {
        foreach ($this->collection as $item) {
            if ($value === $item) {
                return true;
            }
        }

        return false;
    }

    /**
     * Return size of collection.
     */
    public function size(): int
    {
        return $this->size;
    }

    /**
     * Return collection of the data set.
     */
    public function collection(): SplFixedArray
    {
        return $this->collection;
    }

    /**
     * Remove a value from the collection.
     *
     * @param  mixed  $value
     */
    public function remove($value): bool
    {
        if (! $this->contains($value)) {
            return false;
        }

        $removedIndex = $this->indexOf($value);

        for ($index = $removedIndex; $index <= $this->size; $index++) {
            $this->collection[$index] = $this->collection[$index + 1];
        }

        $this->size--;

        return true;
    }

    /**
     * Return index of given value.
     *
     * @param  mixed  $value
     */
    protected function indexOf($value): int
    {
        for ($index = 0; $index < $this->collection->count(); $index++) {
            if ($value === $this->collection[$index]) {
                return $index;
            }
        }

        return -1;
    }

    /**
     * Ensure that the data set size is enough to contain the collection.
     */
    protected function ensureSize(): void
    {
        if ($this->size < $this->collection->count()) {
            return;
        }

        $tempCollection = new SplFixedArray($this->size + 1);

        for ($index = 0; $index < $this->collection->count(); $index++) {
            $tempCollection[$index] = $this->collection[$index];
        }

        $this->collection = $tempCollection;
    }
}
