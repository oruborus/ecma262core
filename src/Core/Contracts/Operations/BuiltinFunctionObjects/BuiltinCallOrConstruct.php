<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\BuiltinFunctionObjects;

use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface BuiltinCallOrConstruct
{
    /**
     * @see https://tc39.es/ecma262/#sec-builtincallorconstruct
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws ThrowCompletion
     */
    public function __invoke(
        ObjectValue $f,
        ?LanguageValue $thisArgument,
        ListValue $argumentsList,
        ObjectValue|UndefinedValue $newTarget,
    ): LanguageValue;
}
