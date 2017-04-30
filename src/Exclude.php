<?php
namespace Playground;

class Exclude
{
    /**
     * @codeCoverageIgnore
     */
    public function foo($arg)
    {
        return $arg;
    }
}