<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase
{
    public function testSayHello()
    {
        $hello = new Hello();
        $this->assertSame("Bonjour, BTS SIO SLAM!", $hello->sayHello("BTS SIO SLAM"));
    }

    public function testSayHelloEmpty()
    {
        $hello = new Hello();
        $this->assertSame("Bonjour, !", $hello->sayHello(""));
    }

    public function testSpecialCharacters()
    {
        $hello = new Hello();
        $this->assertSame("Bonjour, @lice!", $hello->sayHello("@lice"));
    }

    public function testNumericName()
    {
        $hello = new Hello();
        $this->assertSame("Bonjour, 123!", $hello->sayHello("abc"));
    }

    public function testReturnType()
    {
        $hello = new Hello();
        $this->assertIsString($hello->sayHello("Bob"));
    }
}