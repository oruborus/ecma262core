<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface GetPrototypeFromConstructor
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getprototypefromconstructor
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $constructor, StringValue $intrinsicDefaultProto): ObjectValue;
}
