<?php

use ReflectionClass;
use ReflectionMethod;

class User {
    public $id;
    private $password;

    public function __construct($id, $password) {
        $this->id = $id;
        $this->password = $password;
    }

    public function greet($name): string
    {
        return "Hello, $name!";
    }
}

$reflection = new ReflectionClass(User::class);

echo "Class name: " . $reflection->getName() . PHP_EOL;

echo "Properties:\n";
foreach ($reflection->getProperties() as $prop) {
    echo "- " . $prop->getName() . PHP_EOL;
}

echo "Methods:\n";
foreach ($reflection->getMethods() as $method) {
    echo "- " . $method->getName() . PHP_EOL;
}

$user = new User(1, "secret");

$method = new ReflectionMethod(User::class, 'greet');
echo $method->invoke($user, "Alex") . PHP_EOL;
