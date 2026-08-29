<?php

class FastManager
{
    private int $state;

    public function __construct(int $seed = 21)
    {
        $this->state = $seed;
    }

    public function parse_session(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 21) % 997;
        }
        return $acc;
    }
}

$obj = new FastManager();
echo $obj->parse_session(21), PHP_EOL;
