<?php
namespace Roisprogrammer\BelajarComposerLibrary;

class Customer {
    public function __construct(private string $name)
    {

    }
    public function sayHello(string $name = "guest"): string
    {
        return "hi $name, namaku adalah $this->name" .PHP_EOL;
    }
}