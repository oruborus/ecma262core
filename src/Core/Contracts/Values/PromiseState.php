<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

enum PromiseState implements Value
{
    case PENDING;
    case REJECTED;
    case FULFILLED;
}
