<?php declare(strict_types=1);

namespace AP\Singleton;

trait Singleton
{
    /*
     * Constructor can't be public
     */
    protected function __construct()
    {
    }

    public function __clone()
    {
        throw new SingletonException('Cloning a singleton is not allowed');
    }

    public function __sleep()
    {
        throw new SingletonException('Serialization of a singleton is prohibited');
    }

    public function __wakeup()
    {
        throw new SingletonException('Deserialization of a singleton is not permitted');
    }

    public static function getInstance(): static
    {
        static $instances;
        $calledClass = static::class;
        if (!isset($instances[$calledClass])) {
            $instances[$calledClass] = new $calledClass();
        }
        return $instances[$calledClass];
    }
}