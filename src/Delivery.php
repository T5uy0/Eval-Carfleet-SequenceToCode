<?php

class Delivery 
{
    private string $type;
    public function __construct(string $type)
    {
        $this->type = $type;
    }
}