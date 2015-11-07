<?php

require_once 'WebApiRequester.php';

class WebApiRequesterTest extends PHPUnit_Framework_TestCase
{
    /**
     * mockを使わない場合例外がスローされる
     *
     * @test
     * @expectedException WebApiRequestFailedException
     */
    public function requestThrowException()
    {
        $requester = new WebApiRequester();
        $requester->request();
    }

    /**
     * phpunitのmock利用
     * @test
     */
    public function requestSuccessPHPUnitMock()
    {
        $mock = $this->getMock('WebApiRequester', ['doHttpRequest']);
        $mock->expects($this->any())
            ->method('doHttpRequest')
            ->will($this->returnValue([json_encode(['status' => 'success']), ['http_code' => 200]]));

        $response = $mock->request();
        $this->assertThat($response, $this->equalTo([
            'status' => 'success',
        ]));
    }

}
