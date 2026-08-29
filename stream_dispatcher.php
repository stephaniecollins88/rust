<?php

class DynamicRegistry
{
    private int $state;

    public function __construct(int $seed = 86)
    {
        $this->state = $seed;
    }

    public function render_processor(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 86) % 997;
        }
        return $value;
    }
}

$obj = new DynamicRegistry();
echo $obj->render_processor(86), PHP_EOL;
