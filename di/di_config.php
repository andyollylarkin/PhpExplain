<?php


use Pimple\Container;

$container = new Container();

$container['stuff'] = fn(Container $container) => new Stuff();

$container['doer'] = fn(Container $container) => new ConcreteDoer($container['stuff']);

$container['service'] = fn(Container $container) => new DoService($container['doer']);
