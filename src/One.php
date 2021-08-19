<?php

class AppSettings
{
    private $app;

    public function __construct(App $app)
    {
        $this->app = $app;
    }

    public function changeSettings(array $settings): void
    {
        if ($this->verifyCredentials()) {
            // ...
        }
    }

    private function verifyCredentials(): bool
    {
        // ...
    }
}