<?php
declare(strict_types=1);

namespace Playground\Test;

use Cake\Database\Driver;
use Cake\Datasource\ConnectionManager;
use PHPUnit\Framework\TestCase;
use Playground\Subject;

class SubjectTest extends TestCase
{
    public function testFoo(): void
    {
        $subject = new Subject();
        $this->assertNull($subject->foo(false));
        $this->assertTrue($subject->foo(true));
        $this->assertEquals(1, $subject->foo(1));
    }

    public function testBar()
    {
        ConnectionManager::setConfig('test', ['url' => getenv('DB_URL')]);

        /** @var Driver $driver */
        $driver = ConnectionManager::get('test')->getDriver();

        $driverClass = get_class($driver);
        $version = $driver->version();
        $supportsCTEs = $driver->supportsCTEs();
        $supportsWindowFunctions = true;
        if (method_exists($driver, 'supportsWindowFunctions')) {
            $supportsWindowFunctions = $driver->supportsWindowFunctions();
        }

        $isMariaDb = false;
        if ($driver instanceof Driver\Mysql && $driver->isMariadb()) {
            $isMariaDb = true;
        }

        var_dump(
            compact(
                'driverClass',
                'isMariaDb',
                'version',
                'supportsCTEs',
                'supportsWindowFunctions'
            )
        );

        $subject = new Subject();
        $subject->bar();

        $this->assertTrue(true);
    }
}
