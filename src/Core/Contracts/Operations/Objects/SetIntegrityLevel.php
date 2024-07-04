<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Objects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\IntegrityLevel;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface SetIntegrityLevel
{
    /**
     * @see https://tc39.es/ecma262/#sec-setintegritylevel
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $o, IntegrityLevel $level): BooleanValue;
}
