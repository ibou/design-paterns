<?php

declare(strict_types=1);

namespace Idiallo\Observer;


interface EventInterface
{
    public static function getName(): string;
}
