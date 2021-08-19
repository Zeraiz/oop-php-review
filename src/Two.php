<?php

abstract class Adapter
{
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }
}

class XmlAdapter extends Adapter
{
    public function __construct()
    {
        parent::__construct();

        $this->name = 'XmlAdapter';
    }
}

class CsvAdapter extends Adapter
{
    public function __construct()
    {
        parent::__construct();

        $this->name = 'CsvAdapter';
    }
}

class Parser
{
    private $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function fetch(string $dataEncoded): array
    {
        $adapterName = $this->adapter->getName();

        if ($adapterName === 'XmlAdapter') {
            return $this->parseXml($dataEncoded);
        } elseif ($adapterName === 'CsvAdapter') {
            return $this->parseCsv($dataEncoded);
        }
    }

    private function parseXml(string $url): array
    {
        // request and return promise
    }

    private function parseCsv(string $url): array
    {
        // request and return promise
    }
}