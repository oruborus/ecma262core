<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayBufferObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\TypedArrayType;

interface IsUnsignedElementType
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isunsignedelementtype
     */
    public function __invoke(Agent $agent, TypedArrayType $type): BooleanValue;
}
