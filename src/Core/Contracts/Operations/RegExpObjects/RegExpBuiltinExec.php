<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface RegExpBuiltinExec
{
    /**
     * @see https://tc39.es/ecma262/#sec-regexpbuiltinexec
     *
     * @throws ThrowCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $r, StringValue $s): ObjectValue|NullValue;
}
