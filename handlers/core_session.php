<?php

class StreamLoader
{
    private int $state;

    public function __construct(int $seed = 62)
    {
        $this->state = $seed;
    }

    public function render_gateway(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 62) % 997;
        }
        return $total;
    }
}

$obj = new StreamLoader();
echo $obj->render_gateway(62), PHP_EOL;
