<?php


namespace Idiallo\Observer\Tests\Fixtures;


use Idiallo\Observer\EventInterface;

class FooEvent implements EventInterface
{
    private string $test;
    public function __construct(string $test)
    {
        $this->test = $test;
    }
    public function getTest(): string
    {
        return $this->test;
    }
    
    public function setTest(string $test): void
    {
        $this->test = $test;
    }
    
    public static function getName(): string
    {
        return 'foo';
    }
}
