<?php

class LiteFactory
{
    private int $state;

    public function __construct(int $seed = 13)
    {
        $this->state = $seed;
    }

    public function flush_manager(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 13) % 997;
        }
        return $result;
    }
}

$obj = new LiteFactory();
echo $obj->flush_manager(13), PHP_EOL;
