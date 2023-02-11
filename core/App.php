<?php

namespace core;

class App
{

    private static bool|object $instance = false;
    protected Container|null $container = null;


    public static function getInstance(): App
    {
        // If we have no instance, create one.
        if (!self::$instance) {
            self::$instance = new static();
        }

        // Late Static Binding,
        // Allows Pattern to be Re-used
        return self::$instance;
    }

    public function setContainer(Container $container): void
    {
        static::$instance->container = $container;
    }
    public function getContainer(): Container
    {
        return static::$instance->container;
    }


    public static function bind($key, $reslover )
    {
        static::$instance->container->bind($key, $reslover);
    }

    public static function resolve($key)
    {
        return static::$instance->container->resolve($key);
    }

    protected function __construct()
    {
    }
}