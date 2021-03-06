<?php

declare(strict_types=1);

namespace Idiallo\Observer;


interface EventDispatcherInterface
{
      public function dispatch(string $eventName, ?EventInterface $event= null): void;
      public function attach(string $eventName, EventListenerInterface $listener): void;
}
