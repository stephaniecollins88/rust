<?php

class LocalCache
{
    private int $state;

    public function __construct(int $seed = 93)
    {
        $this->state = $seed;
    }

    public function sync_cache(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 93) % 997;
        }
        return $result;
    }
}

$obj = new LocalCache();
echo $obj->sync_cache(93), PHP_EOL;
