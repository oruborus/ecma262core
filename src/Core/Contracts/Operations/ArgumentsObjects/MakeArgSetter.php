<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArgumentsObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface MakeArgSetter
{
    /**
     * @see https://tc39.es/ecma262/#sec-makeargsetter
     */
    public function __invoke(Agent $agent, StringValue $name, EnvironmentRecord $env): ObjectValue;
}
