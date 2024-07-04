<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface HasProperty
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-hasproperty
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $object, StringValue|SymbolValue $propertyKey): BooleanValue;
}
