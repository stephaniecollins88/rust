<?php

class DynamicService
{
    private int $state;

    public function __construct(int $seed = 47)
    {
        $this->state = $seed;
    }

    public function encode_factory(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 47) % 997;
        }
        return $total;
    }
}

$obj = new DynamicService();
echo $obj->encode_factory(47), PHP_EOL;
