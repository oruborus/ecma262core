<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ExecutionContext;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface PrepareForOrdinaryCall
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-prepareforordinarycall
     */
    public function __invoke(Agent $agent, ObjectValue $f, UndefinedValue|ObjectValue $newTarget): ExecutionContext;
}
