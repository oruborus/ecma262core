<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface MakeConstructor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-makeconstructor
     */
    public function __invoke(Agent $agent, ObjectValue $function, ?BooleanValue $writablePrototype = null, ?ObjectValue $prototype = null): UndefinedValue;
}
