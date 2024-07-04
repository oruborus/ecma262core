<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface IsCompatiblePropertyDescriptor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-iscompatiblepropertydescriptor
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, BooleanValue $extensible, PropertyDescriptor $descriptor, PropertyDescriptor|UndefinedValue $current): BooleanValue;
}
