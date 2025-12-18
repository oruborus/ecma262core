<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\DefaultMethods;

use Closure;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface BoundFunctionObjects
{
    /** @var Closure(LanguageValue, ListValue<LanguageValue>):LanguageValue $⟦Call⟧ */
    public Closure $⟦Call⟧ { get; }

    /** @var Closure(ListValue<LanguageValue>, ObjectValue|UndefinedValue):LanguageValue $⟦Construct⟧ */
    public Closure $⟦Construct⟧ { get; }
}
