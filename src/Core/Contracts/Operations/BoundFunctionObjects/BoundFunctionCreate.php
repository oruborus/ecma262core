<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\BoundFunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface BoundFunctionCreate
{
    /**
     * @see https://tc39.es/ecma262/#sec-boundfunctioncreate
     *
     * @param ListValue<LanguageValue> $boundArgs
     * 
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $targetFunction, LanguageValue $boundThis, ListValue $boundArgs): ObjectValue;
}
