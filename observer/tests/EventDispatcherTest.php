<?php

declare(strict_types=1);

namespace Idiallo\Observer\Tests;

use Idiallo\Observer\Tests\Fixtures\FooEvent;
use Idiallo\Observer\Tests\Fixtures\FooListener;
use PHPUnit\Framework\TestCase;
use Idiallo\Observer\EventDispatcher;

class EventDispatcherTest extends TestCase
{
    public function testIfDispatchedSuccessfully()
    {
        $eventDispatcher = new EventDispatcher();
        $event = new FooEvent("qux");
        $eventListener = new FooListener();
        $eventDispatcher->attach(FooEvent::getName(), $eventListener);
        $this->assertEquals('qux', $event->getTest());
        $eventDispatcher->dispatch(FooEvent::getName(), $event);
        $this->assertEquals('bar', $event->getTest());
    }
}
