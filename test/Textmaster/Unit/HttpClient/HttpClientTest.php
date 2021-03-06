<?php

/*
 * This file is part of the Textmaster Api v1 client package.
 *
 * (c) Christian Daguerre <christian@daguer.re>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Textmaster\Unit\HttpClient;

use Textmaster\HttpClient\HttpClient;

class HttpClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldDoGETRequest()
    {
        $path = '/some/path';
        $parameters = ['a' => 'b'];
        $headers = ['c' => 'd'];

        $httpClient = new HttpClient('key', 'secret', []);
        $response = $httpClient->get($path, $parameters, $headers);

        $this->assertTrue(in_array('Psr\Http\Message\ResponseInterface', class_implements($response), true));
    }

    /**
     * @test
     */
    public function shouldDoPOSTRequest()
    {
        $path = '/some/path';
        $body = ['a' => 'b'];
        $headers = ['c' => 'd'];

        $httpClient = new HttpClient('key', 'secret', []);
        $response = $httpClient->post($path, $body, $headers);

        $this->assertTrue(in_array('Psr\Http\Message\ResponseInterface', class_implements($response), true));
    }

    /**
     * @test
     */
    public function shouldDoPOSTRequestWithoutContent()
    {
        $path = '/some/path';

        $httpClient = new HttpClient('key', 'secret', []);
        $response = $httpClient->post($path);

        $this->assertTrue(in_array('Psr\Http\Message\ResponseInterface', class_implements($response), true));
    }

    /**
     * @test
     */
    public function shouldDoPATCHRequest()
    {
        $path = '/some/path';
        $body = ['a' => 'b'];
        $headers = ['c' => 'd'];

        $httpClient = new HttpClient('key', 'secret', []);
        $response = $httpClient->patch($path, $body, $headers);

        $this->assertTrue(in_array('Psr\Http\Message\ResponseInterface', class_implements($response), true));
    }

    /**
     * @test
     */
    public function shouldDoDELETERequest()
    {
        $path = '/some/path';
        $body = ['a' => 'b'];
        $headers = ['c' => 'd'];

        $httpClient = new HttpClient('key', 'secret', []);
        $response = $httpClient->delete($path, $body, $headers);

        $this->assertTrue(in_array('Psr\Http\Message\ResponseInterface', class_implements($response), true));
    }

    /**
     * @test
     */
    public function shouldDoPUTRequest()
    {
        $path = '/some/path';
        $headers = ['c' => 'd'];

        $httpClient = new HttpClient('key', 'secret', []);
        $response = $httpClient->put($path, $headers);

        $this->assertTrue(in_array('Psr\Http\Message\ResponseInterface', class_implements($response), true));
    }
}
