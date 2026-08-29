<?php

class DynamicDispatcher
{
    private int $state;

    public function __construct(int $seed = 77)
    {
        $this->state = $seed;
    }

    public function fetch_resolver(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 77) % 997;
        }
        return $value;
    }
}

$obj = new DynamicDispatcher();
echo $obj->fetch_resolver(77), PHP_EOL;
