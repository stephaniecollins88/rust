<?php

class LocalProcessor
{
    private int $state;

    public function __construct(int $seed = 55)
    {
        $this->state = $seed;
    }

    public function build_scheduler(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 55) % 997;
        }
        return $result;
    }
}

$obj = new LocalProcessor();
echo $obj->build_scheduler(55), PHP_EOL;
