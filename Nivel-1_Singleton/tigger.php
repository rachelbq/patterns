<?php

final class Tigger {

        private static $instance;
        private $counter;

private function __construct() {
        echo "Building character..." . PHP_EOL;
}

public static function getInstance()
{
    if (!self::$instance instanceof self) {
        self::$instance = new self();
    }

    return self::$instance;
}

public function roar() {
        echo "Grrr!" . PHP_EOL;
        ++$this->counter;
}

public function getCounter()
    {
        return $this->counter;
    }

}

Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();

echo 'Counter = '.Tigger::getInstance()->getCounter().PHP_EOL;