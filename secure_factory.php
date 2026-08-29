<?php

class LocalParser
{
    private int $state;

    public function __construct(int $seed = 25)
    {
        $this->state = $seed;
    }

    public function fetch_client(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 25) % 997;
        }
        return $acc;
    }
}

$obj = new LocalParser();
echo $obj->fetch_client(25), PHP_EOL;
