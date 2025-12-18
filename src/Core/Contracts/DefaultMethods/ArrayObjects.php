<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\DefaultMethods;

use Closure;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface ArrayObjects
{
    /** @var Closure(StringValue|SymbolValue, PropertyDescriptor):BooleanValue $⟦DefineOwnProperty⟧ */
    public Closure $⟦DefineOwnProperty⟧ { get; }
}
