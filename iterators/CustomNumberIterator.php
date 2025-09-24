<?php

class CustomNumberIterator implements Iterator
{
    private int $start;
    private int $current;
    private int $end;

    public function __construct(int $start, $end)
    {
        $this->start = $start;
        $this->current = $start;
        $this->end = $end;
    }

    public function current(): int
    {
        return $this->current;
    }

    public function next(): void
    {
        $this->current++;
    }

    public function key(): int
    {
        return $this->current;
    }

    public function valid(): bool
    {
        return $this->current <= $this->end;
    }

    public function rewind(): void
    {
        $this->current = $this->start;
    }
}

$numberIterator = new CustomNumberIterator(1, 10);
foreach ($numberIterator as $number) {
    echo $number . PHP_EOL;
}
