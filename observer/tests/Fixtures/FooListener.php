<?php


namespace Idiallo\Observer\Tests\Fixtures;


use Idiallo\Observer\EventInterface;
use Idiallo\Observer\EventListenerInterface;

class FooListener implements EventListenerInterface
{
    
    /**
     * @param ?FooEvent $event
     */
    public function listen(?EventInterface $event): void
    {
        $event->setTest("bar");
    }
}
