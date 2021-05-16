<?php
declare(strict_types=1);

namespace Playground;

use Cake\Database\Driver\Mysql;
use Cake\Database\Driver\Postgres;
use Cake\Database\Driver\Sqlite;
use Cake\Database\Driver\Sqlserver;
use Cake\Datasource\ConnectionManager;

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

    /**
     * Description
     *
     * @return int
     */
    public function bar()
    {
        $driver = ConnectionManager::get('test')->getDriver();

        $var = 0;

        if ($driver instanceof Sqlite) {
            $var = 1;
        }
        if ($driver instanceof Mysql) {
            $var = 2;
        }
        if ($driver instanceof Postgres) {
            $var = 3;
        }
        if ($driver instanceof Sqlserver) {
            $var = 4;
        }

        return $var;
    }
}
