<?php

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StatusControllerTest extends WebTestCase
{
    private KernelBrowser $client;

    public function __construct(
        ?string $name = null,
        array $data = [],
        $dataName = '',
    )
    {
        parent::__construct($name, $data, $dataName);
        self::createKernel();
        $this->client = static::createClient();
    }

    public function testApiVersion()
    {
        $this->client->request('GET', '/api/status');
        $response = (array)json_decode($this->client->getResponse()->getContent());
        self::assertIsArray($response);
    }
}
