<?php

class CustomStringIterator implements Iterator
{
    private int $position = 0;
    private array $items;

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function current(): string
    {
        return $this->items[$this->position];
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function key(): string
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}

$stringIterator = new CustomStringIterator(["one", "two", "three", "four", "five"]);

foreach ($stringIterator as $string) {
    echo $string . PHP_EOL;
}
