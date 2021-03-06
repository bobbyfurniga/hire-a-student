<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $responseStatusCode = $this->get('/')->getStatusCode();

        $assert = $responseStatusCode == 200 || $responseStatusCode == 302;

        $this->assertTrue($assert);
    }
}
