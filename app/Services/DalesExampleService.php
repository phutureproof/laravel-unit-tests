<?php

namespace App\Services;

class DalesExampleService
{
    /**
     * @return bool
     */
    public function doSomething()
    {
        return true;
    }

    /**
     * @throws \Exception
     */
    public function throwSomething()
    {
        throw new \Exception("Something went wrong", 99);
    }
}