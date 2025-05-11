<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface OrdinaryGetOwnProperty
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinarygetownproperty
     */
    public function __invoke(ObjectValue $object, StringValue|SymbolValue $propertyKey): PropertyDescriptor|UndefinedValue;
}
