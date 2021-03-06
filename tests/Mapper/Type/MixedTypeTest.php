<?php

namespace tests\Dsl\MyTarget\Mapper\Type;

use Dsl\MyTarget\Mapper\Mapper;
use Dsl\MyTarget\Mapper\Type\MixedType;

class MixedTypeTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject|Mapper */
    protected $mapper;

    protected function setUp()
    {
        $this->mapper = $this->getMockBuilder(Mapper::class)
                             ->disableOriginalConstructor()
                             ->getMock();
    }

    public function testItHydrates()
    {
        $mixedType = new MixedType();

        $value = new \stdClass();

        $result = $mixedType->hydrated($value, 'any type', $this->mapper);

        $this->assertSame($value, $result);
    }

    public function testItHMakesSnapshot()
    {
        $mixedType = new MixedType();

        $value = new \stdClass();

        $result = $mixedType->snapshot($value, 'any type', $this->mapper);

        $this->assertSame($value, $result);
    }
}
