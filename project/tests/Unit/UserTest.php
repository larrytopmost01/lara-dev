<?php

namespace Tests\Unit;
use App\Models\User;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::create(['name'=> 'femi', 'lastname'=>'Dolapo', 'email'=>'dollyp@gmail.com', 'password'=>'secret']);
         $this->assertEquals('femi', $user->fullname);
    }
}
