<?php
declare(strict_types=1);

namespace Playground\Test;

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
        $this->assertEquals(1, $subject->foo(2));
        $this->assertEquals(1, $subject->foo(3));
        //$this->assertEquals(1, $subject->foo(4));
    }
}
