<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StatusControllerTest extends WebTestCase
{
    public function testApiVersion()
    {
        self::bootKernel();
        $client = static::createClient();

        $response = $client->request('GET', '/api/status');
    }
}
