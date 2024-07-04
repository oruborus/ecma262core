<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum GeneratorState implements Value
{
    case AWAITING_RETURN;
    case SUSPENDED_START;
    case SUSPENDED_YIELD;
    case EXECUTING;
    case COMPLETED;
}
