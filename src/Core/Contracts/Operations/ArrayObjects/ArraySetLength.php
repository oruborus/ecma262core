<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;

interface ArraySetLength
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-arraysetlength
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $a, PropertyDescriptor $desc): BooleanValue;
}
