<?php

require_once 'Model.php';

class ModelTest extends PHPUnit_Framework_TestCase
{
    protected $model;

    public function setup()
    {
        $this->model = new Model();
    }

    public function testGetter()
    {
        $this->assertEquals($this->model->test, 'value');
        $this->assertEquals($this->model->upper_test, 'VALUE');
        $this->assertNull($this->model->value);
    }
}
