<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\DefaultMethods;

use Closure;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface StringObjects
{
    /** @var Closure(StringValue|SymbolValue):PropertyDescriptor|UndefinedValue $⟦GetOwnProperty⟧ */
    public Closure $⟦GetOwnProperty⟧ { get; }

    /** @var Closure(StringValue|SymbolValue, PropertyDescriptor):BooleanValue $⟦DefineOwnProperty⟧ */
    public Closure $⟦DefineOwnProperty⟧ { get; }

    /** @var Closure():ListValue<StringValue|SymbolValue> $⟦OwnPropertyKeys⟧ */
    public Closure $⟦OwnPropertyKeys⟧ { get; }
}
