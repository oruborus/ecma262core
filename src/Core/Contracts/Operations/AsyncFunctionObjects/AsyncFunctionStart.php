<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncFunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ExpressionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionBody;
use Oru\EcmaScript\Core\Contracts\Values\PromiseCapabilityRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface AsyncFunctionStart
{
    /**
     * @see https://tc39.es/ecma262/#sec-async-functions-abstract-operations-async-function-start
     */
    public function __invoke(Agent $agent, PromiseCapabilityRecord $promiseCapability, FunctionBody|ExpressionBody $asyncFunctionBody): UnusedValue;
}
