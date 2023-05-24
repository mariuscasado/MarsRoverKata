<?php

declare(strict_types=1);

use App\Foo;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Prophet;

class Test extends TestCase
{
    private ObjectProphecy|Foo $stub;

    protected function setUp(): void
    {
        $prophet = new Prophet;
        $this->stub = $prophet->prophesize(Foo::class);
    }

    public function testFoo(): void
    {
        $this->stub->bar()->willReturn(true);

        self::assertTrue(true);
    }
}