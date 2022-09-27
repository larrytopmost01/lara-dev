<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * 
     * @test
     */
    public function example()
    {
        $a = 5;
        $b = 7;

        $c = 5 * 7;

        $this->assertEquals($c, 35);
    }
}
