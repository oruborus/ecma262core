<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypedArrayObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AllocateTypedArrayBuffer
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-allocatetypedarraybuffer
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $o, NumberValue $length): ObjectValue;
}
