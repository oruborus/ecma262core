<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface OrdinarySetWithOwnDescriptor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinarysetwithowndescriptor
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $object, StringValue|SymbolValue $propertyKey, LanguageValue $value, LanguageValue $receiver, PropertyDescriptor|UndefinedValue $ownDescriptor): BooleanValue;
}
