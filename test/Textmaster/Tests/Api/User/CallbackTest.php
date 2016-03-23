<?php

namespace Textmaster\Tests\Api\User;

use Textmaster\Tests\Api\TestCase;

class CallbackTest extends TestCase
{
    /**
     * @test
     */
    public function shouldSetCallback()
    {
        $expectedArray = array('id' => 1);

        $api = $this->getApiMock();
        $api->expects($this->once())
            ->method('put')
            ->with('clients/users/1')
            ->will($this->returnValue($expectedArray));

        $this->assertEquals($expectedArray, $api->set(1, 'waiting_assignment', 'http://www.callbackurl.com', 'json'));
    }

    /**
     * @test
     * @expectedException Textmaster\Exception\InvalidArgumentException
     */
    public function shouldThrowExceptionWhenSettingCallbackWIthInvalidEvent()
    {
        $this->getApiMock()->set(1, 'invalid_event', 'http://www.callbackurl.com', 'json');
    }

    /**
     * @test
     * @expectedException Textmaster\Exception\InvalidArgumentException
     */
    public function shouldThrowExceptionWhenSettingCallbackWIthInvalidFormat()
    {
        $this->getApiMock()->set(1, 'waiting_assignment', 'http://www.callbackurl.com', 'html');
    }

    protected function getApiClass()
    {
        return 'Textmaster\Api\User\Callback';
    }
}