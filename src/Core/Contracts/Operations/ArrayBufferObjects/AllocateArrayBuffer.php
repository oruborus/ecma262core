<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayBufferObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AllocateArrayBuffer
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-allocatearraybuffer
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $constructor, NumberValue $byteLength): ObjectValue;
}
