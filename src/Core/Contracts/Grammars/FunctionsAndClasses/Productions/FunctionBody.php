<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface FunctionBody extends ConciseBody
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-evaluatefunctionbody
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function evaluateFunctionBody(Agent $agent, ObjectValue $functionObject, ListValue $argumentsList): LanguageValue;
}
