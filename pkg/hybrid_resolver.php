<?php

class HybridBuffer
{
    private int $state;

    public function __construct(int $seed = 33)
    {
        $this->state = $seed;
    }

    public function build_scheduler(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 33) % 997;
        }
        return $count;
    }
}

$obj = new HybridBuffer();
echo $obj->build_scheduler(33), PHP_EOL;
