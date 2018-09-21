<?php


use App\User;
use Illuminate\Support\Facades\Hash;

class UserTest extends \Codeception\Test\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testRegister()
    {
        $email = 'johndoe@example.com';
        $password = Hash::make('password');

        User::register(['email' => $email, 'password' => $password]);

        $this->tester->seeRecord('users', ['email' => $email, 'password' => $password]);
    }

}
