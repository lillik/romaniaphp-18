<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testSaysHelloWorld(): void
    {
        $greeter = new Greeter;

        $this->assertSame('Hello world!', $greeter->sayHello());
    }
}
