<?php
namespace Playground\Test;

use PHPUnit\Framework\TestCase;
use Playground\Subject;

class SubjectTest extends TestCase
{
    public function testFoo()
    {
        $subject = new Subject();
        $this->assertNull($subject->foo(false));
        $this->assertTrue($subject->foo(true));
        $this->assertEquals(1, $subject->foo(1));
    }
}