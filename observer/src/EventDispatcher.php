<?php

declare(strict_types=1);

namespace Idiallo\Observer;


class EventDispatcher implements EventDispatcherInterface
{
    
    /**
     * @var array<string, array<array-key, EventListenerInterface>>
     */
    private array $listener = [];
    
    public function dispatch(string $eventName, ?EventInterface $event = null): void
    {
        foreach ($this->listener[$eventName] as $listener) {
            $listener->listen($event);
        }
    }
    
    public function attach(string $eventName, EventListenerInterface $listener): void
    {
        $this->listener[$eventName][] = $listener;
    }
}
