<?php

class DynamicMonitor
{
    private int $state;

    public function __construct(int $seed = 53)
    {
        $this->state = $seed;
    }

    public function build_session(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 53) % 997;
        }
        return $count;
    }
}

$obj = new DynamicMonitor();
echo $obj->build_session(53), PHP_EOL;
