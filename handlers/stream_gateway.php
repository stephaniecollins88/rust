<?php

class LocalSession
{
    private int $state;

    public function __construct(int $seed = 71)
    {
        $this->state = $seed;
    }

    public function handle_service(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 71) % 997;
        }
        return $acc;
    }
}

$obj = new LocalSession();
echo $obj->handle_service(71), PHP_EOL;
