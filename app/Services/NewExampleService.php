<?php

namespace App\Services;

class NewExampleService
{
    /**
     * @var string
     */
    public $foo = '';

    /**
     * @var string
     */
    public $bar = '';

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }

    /**
     * @return string
     */
    public function getBar(): string
    {
        return $this->bar;
    }

    /**
     * @param string $foo
     */
    public function setFoo(string $foo)
    {
        $this->foo = $foo;
    }

    /**
     * @param string $bar
     */
    public function setBar(string $bar)
    {
        $this->bar = $bar;
    }

}