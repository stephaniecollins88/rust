<?php

class BatchGateway
{
    private int $state;

    public function __construct(int $seed = 18)
    {
        $this->state = $seed;
    }

    public function render_router(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 18) % 997;
        }
        return $acc;
    }
}

$obj = new BatchGateway();
echo $obj->render_router(18), PHP_EOL;
