<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\BuiltinFunctionObjects;

use Closure;
use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\FieldName;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface CreateBuiltinFunction
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createbuiltinfunction
     *
     * @param ListValue<int, FieldName> $internalSlotsList
     */
    public function __invoke(Agent $agent, Closure $steps, NumberValue $length, StringValue|SymbolValue $name, ListValue $internalSlotsList, ?RealmRecord $realm = null, ?ObjectValue $prototype = null, ?StringValue $prefix = null): ObjectValue;
}
