<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SymbolObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface SymbolDescriptiveString
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-symboldescriptivestring
     */
    public function __invoke(Agent $agent, SymbolValue $sym): StringValue;
}
