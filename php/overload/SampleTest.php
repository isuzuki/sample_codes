<?php

require_once 'Sample.php';

class SampleTest extends PHPUnit_Framework_TestCase
{
    protected $sample;

    public function setUp()
    {
        $this->sample = new Sample();
    }

    public function testUseFuncGetArgs()
    {
        $this->assertEquals($this->sample->useFuncGetArgs('value1'), 'one');
        $this->assertEquals($this->sample->useFuncGetArgs('value1', 'value2'), 'two');
    }

    public function testUseVariableLengthArgs()
    {
        $this->assertEquals($this->sample->useFuncGetArgs('value1'), 'one');
        $this->assertEquals($this->sample->useFuncGetArgs('value1', 'value2'), 'two');
    }

    public function testCall()
    {
        $this->assertEquals($this->sample->overloadSample('value1'), 'one');
        $this->assertEquals($this->sample->overloadSample('value1', 'value2'), 'two');
    }
}
