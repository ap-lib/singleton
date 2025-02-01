<?php declare(strict_types=1);

namespace AP\Tests;

use AP\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class Hello
{
    use Singleton;

    private string $format;

    public function sayHello(string $name): string
    {
        return sprintf($this->format, $name);
    }

    private function __construct()
    {
        $this->format = "Hello %s";
    }
}

final class SingletonTest extends TestCase
{
    public function testMainProcess(): void
    {
        $this->assertEquals(
            "Hello World",
            Hello::getInstance()->sayHello("World")
        );
    }
}
