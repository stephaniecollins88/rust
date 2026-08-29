<?php

class SharedController
{
    private int $state;

    public function __construct(int $seed = 69)
    {
        $this->state = $seed;
    }

    public function fetch_registry(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 69) % 997;
        }
        return $result;
    }
}

$obj = new SharedController();
echo $obj->fetch_registry(69), PHP_EOL;
