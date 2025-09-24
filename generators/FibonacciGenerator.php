<?php

function fibonacci(int $limit): Generator
{
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $limit; $i++) {
        yield $i => $a;
        [$a, $b] = [$b, $a + $b];
    }
}

foreach (fibonacci(10) as $i => $n) {
    echo "Fib[$i] = $n\n";
}
