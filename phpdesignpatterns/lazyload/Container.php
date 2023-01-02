<?php

namespace patterns\lazyload;


use Exception;
use Psr\Container\ContainerInterface;

final class Container implements ContainerInterface
{
    private array $definitions;

    /**
     * @throws Exception
     */
    public function get(string $id)
    {
        if (!array_key_exists($id, $this->definitions)) {
            throw new Exception("Undefined component: " . $id);
        }
        $value = $this->definitions[$id];
        if (is_callable($value)) {
            return $value($this);
        }
        if (is_string($value) and !class_exists($value)) {
            return $value;
        }
        if (class_exists($value)) {
            $reflection = new \ReflectionClass($value);
            $constructor = $reflection->getConstructor();
            $args = [];
            if (!is_null($constructor)) {
                foreach ($constructor->getParameters() as $parameter) {
                    $paramClass = $parameter->getClass();
                    $args[] = $paramClass ? $this->get($paramClass->getName()) : null;
                }
            }
            $component = $reflection->newInstanceArgs($args);
        }
        /** @noinspection PhpUndefinedVariableInspection */
        return !$component ? throw new Exception("Undefined component: " . $id) : $component;
    }

    public function set(string $id, callable|string $factory): void
    {
//        Тут регистрируем зависимость, но не создается объект. Объект будет создан при запросе - LazyLoad
        $this->definitions[$id] = $factory;
    }

    public function has(string $id): bool
    {
        return isset($this->instances[$id]);
    }


}