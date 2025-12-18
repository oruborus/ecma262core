<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\DefaultMethods;

use Closure;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ExoticObjects
{
    /** @var Closure(ObjectValue|NullValue):BooleanValue $⟦SetPrototypeOf⟧ */
    public Closure $⟦SetPrototypeOf⟧ { get; }
}
