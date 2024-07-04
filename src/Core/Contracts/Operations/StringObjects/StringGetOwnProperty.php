<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\StringObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface StringGetOwnProperty
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-stringgetownproperty
     */
    public function __invoke(Agent $agent, ObjectValue $s, StringValue|SymbolValue $propertyKey): UndefinedValue|PropertyDescriptor;
}
