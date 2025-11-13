<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PrivateName;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface DefineMethodProperty
{
    /**
     * @see https://tc39.es/ecma262/#sec-definemethodproperty
     *
     * @throws AbruptCompletion
     */
    public function __invoke(
        ObjectValue $homeObject,
        StringValue|SymbolValue|PrivateName $key,
        ObjectValue $closure,
        BooleanValue $enumerable,
    ): UnusedValue;
}
