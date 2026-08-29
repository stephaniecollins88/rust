<?php

class FastBuffer
{
    private int $state;

    public function __construct(int $seed = 54)
    {
        $this->state = $seed;
    }

    public function load_service(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 54) % 997;
        }
        return $acc;
    }
}

$obj = new FastBuffer();
echo $obj->load_service(54), PHP_EOL;
