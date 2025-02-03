# AP\Singleton

[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

Implementation for a singleton pattern 

## Installation

```bash
composer require ap-lib/singleton
```

## Requirements
- PHP 8.1 or higher

## How it works

```php
use AP\Singleton\Singleton;

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

echo Hello::getInstance()->sayHello("World"); // Hello World
```