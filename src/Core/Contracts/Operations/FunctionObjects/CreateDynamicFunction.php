<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\DynamicFunctionKind;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface CreateDynamicFunction
{
    /**
     * @see https://tc39.es/ecma262/#sec-createdynamicfunction
     *
     * @param ListValue<int, LanguageValue> $parameterArgs
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $constructor, UndefinedValue|ObjectValue $newTarget, DynamicFunctionKind $kind, ListValue $parameterArgs, LanguageValue $bodyArg): ObjectValue;
}
