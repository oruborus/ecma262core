<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface SetFunctionName
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-setfunctionname
     */
    public function __invoke(Agent $agent, ObjectValue $function, StringValue|SymbolValue $name, ?StringValue $prefix = null): BooleanValue;
}
