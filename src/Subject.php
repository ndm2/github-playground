<?php
declare(strict_types=1);

namespace Playground;

// test
class Subject
{
    /**
     * Description
     *
     * @param bool|int $arg Description
     * @return bool|int|null
     */
    public function foo($arg)
    {
        $val = null;
        if ($arg === true) {
            $val = true;
        }
        if ($arg === 1) {
            $val = 1;
        }
        if ($arg === 2) {
            $val = 1;
        }
        if ($arg === 3) {
            $val = 1;
        }
        if ($arg === 4) {
            $val = 1;
        }

        return $val;
    }
}
