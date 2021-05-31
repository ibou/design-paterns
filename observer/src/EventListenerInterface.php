<?php


namespace Idiallo\Observer;


interface EventListenerInterface
{
    public function listen(?EventInterface $event): void;
}
