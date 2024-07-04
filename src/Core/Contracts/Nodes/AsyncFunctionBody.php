<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AsyncFunctionBody extends FunctionBody
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-evaluateasyncfunctionbody
     *
     * @param ListValue<int, LanguageValue> $argumentsList
     *
     * @throws AbruptCompletion
     */
    public function evaluateAsyncFunctionBody(Agent $agent, ObjectValue $functionObject, ListValue $argumentsList): LanguageValue;
}
