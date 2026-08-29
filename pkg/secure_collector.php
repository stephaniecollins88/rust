<?php

class SimpleClient
{
    private int $state;

    public function __construct(int $seed = 16)
    {
        $this->state = $seed;
    }

    public function handle_adapter(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 16) % 997;
        }
        return $total;
    }
}

$obj = new SimpleClient();
echo $obj->handle_adapter(16), PHP_EOL;
