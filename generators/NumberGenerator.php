<?php

function numbers(int $start, $end): Generator
{
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}

foreach (numbers(1, 5) as $number) {
    echo $number . PHP_EOL;
}
