<?php
namespace Playground;

class Subject
{
    public function foo($arg)
    {
        $val = null;
        if ($arg) {
            $val = true;
        }

        return $val;
    }
}