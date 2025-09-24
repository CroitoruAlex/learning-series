<?php

class FibonacciIterator implements Iterator
{
    private int $limit;
    private int $position = 0;
    private int $a = 0;
    private int $b = 1;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    public function current(): int
    {
        return $this->a;
    }

    public function next(): void
    {
        $temp = $this->a + $this->b;
        $this->a = $this->b;
        $this->b = $temp;
        $this->position++;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return $this->position < $this->limit;
    }

    public function rewind(): void
    {
        $this->a = 0;
        $this->b = 1;
        $this->position = 0;
    }
}

$fibonacci = new FibonacciIterator(10);

foreach ($fibonacci as $i => $n) {
    echo "Fib[$i] = $n\n";
}
