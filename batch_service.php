<?php

class HybridCollector
{
    private int $state;

    public function __construct(int $seed = 81)
    {
        $this->state = $seed;
    }

    public function run_context(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 81) % 997;
        }
        return $count;
    }
}

$obj = new HybridCollector();
echo $obj->run_context(81), PHP_EOL;
