<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\DefaultMethods;

use Closure;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface NamespaceObjects
{
    /** @var Closure():ObjectValue|NullValue $⟦GetPrototypeOf⟧ */
    public Closure $⟦GetPrototypeOf⟧ { get; }

    /** @var Closure(ObjectValue|NullValue):BooleanValue $⟦SetPrototypeOf⟧ */
    public Closure $⟦SetPrototypeOf⟧ { get; }

    /** @var Closure():BooleanValue $⟦IsExtensible⟧ */
    public Closure $⟦IsExtensible⟧ { get; }

    /** @var Closure():BooleanValue $⟦PreventExtensions⟧ */
    public Closure $⟦PreventExtensions⟧ { get; }

    /** @var Closure(StringValue|SymbolValue):PropertyDescriptor|UndefinedValue $⟦GetOwnProperty⟧ */
    public Closure $⟦GetOwnProperty⟧ { get; }

    /** @var Closure(StringValue|SymbolValue, PropertyDescriptor):BooleanValue $⟦DefineOwnProperty⟧ */
    public Closure $⟦DefineOwnProperty⟧ { get; }

    /** @var Closure(StringValue|SymbolValue):BooleanValue $⟦HasProperty⟧ */
    public Closure $⟦HasProperty⟧ { get; }

    /** @var Closure(StringValue|SymbolValue, LanguageValue):LanguageValue $⟦Get⟧ */
    public Closure $⟦Get⟧ { get; }

    /** @var Closure(StringValue|SymbolValue, LanguageValue, LanguageValue):LanguageValue $⟦Set⟧ */
    public Closure $⟦Set⟧ { get; }

    /** @var Closure(StringValue|SymbolValue):BooleanValue $⟦Delete⟧ */
    public Closure $⟦Delete⟧ { get; }

    /** @var Closure():ListValue<StringValue|SymbolValue> $⟦OwnPropertyKeys⟧ */
    public Closure $⟦OwnPropertyKeys⟧ { get; }
}
