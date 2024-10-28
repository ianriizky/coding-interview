<?php

namespace Tests\Unit;

use Ianriizky\CodingInterview\DataSet\DataSet;
use Tests\TestCase;

class DataSetTest extends TestCase
{
    /**
     * Assert that data set add() method is run correctly.
     *
     * @return void
     */
    public function test_add()
    {
        $dataset = new DataSet;

        $this->assertTrue($dataset->add('Septianata'));
        $this->assertFalse($dataset->add('Septianata'));

        $this->assertTrue($dataset->add('Rizky'));
        $this->assertFalse($dataset->add('Rizky'));

        $this->assertTrue($dataset->add('Pratama'));
        $this->assertFalse($dataset->add('Pratama'));
    }

    /**
     * Assert that data set contains() method is run correctly.
     *
     * @return void
     */
    public function test_contains()
    {
        $dataset = new DataSet;

        $dataset->add('Septianata');
        $dataset->add('Rizky');

        $this->assertTrue($dataset->contains('Septianata'));
        $this->assertTrue($dataset->contains('Rizky'));
        $this->assertFalse($dataset->contains('Pratama'));
    }

    /**
     * Assert that data set size() method is run correctly.
     *
     * @return void
     */
    public function test_size()
    {
        $dataset = new DataSet;
        $this->assertEquals($dataset->size(), 0);

        $dataset->add('Septianata');
        $this->assertEquals($dataset->size(), 1);

        $dataset->add('Septianata');
        $this->assertEquals($dataset->size(), 1);

        $dataset->add('Rizky');
        $this->assertEquals($dataset->size(), 2);
    }

    /**
     * Assert that data set remove() method is run correctly.
     *
     * @return void
     */
    public function test_remove()
    {
        $dataset = new DataSet;

        $dataset->add('Septianata');
        $dataset->add('Rizky');
        $dataset->add('Pratama');
        $dataset->add('Belajar');
        $dataset->add('Data Set');
        $dataset->add('PHP');

        $this->assertEquals(6, $dataset->size());

        $dataset->remove('Rizky');

        $this->assertEquals(5, $dataset->size());

        $this->assertTrue($dataset->contains('Septianata'));
        $this->assertTrue($dataset->contains('Pratama'));
        $this->assertTrue($dataset->contains('Belajar'));
        $this->assertTrue($dataset->contains('Data Set'));
        $this->assertTrue($dataset->contains('PHP'));
    }

    /**
     * Assert that data set growth() method is run correctly.
     *
     * @return void
     */
    public function test_growth()
    {
        $size = rand(1, 100);
        $dataset = new DataSet;

        for ($index = 0; $index < $size; $index++) {
            $dataset->add('item-'.$index);
        }

        $this->assertEquals($size, $dataset->size());
    }
}
