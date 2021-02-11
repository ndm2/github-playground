<?php
declare(strict_types=1);

namespace Playground;

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

        return $val;
    }
}
