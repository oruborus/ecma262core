<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\GraphLoadingState;
use Oru\EcmaScript\Core\Contracts\Values\PromiseCapabilityRecord;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\ScriptRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface HostLoadImportedModule
{
    /**
     * @see https://tc39.es/ecma262/#sec-HostLoadImportedModule
     */
    public function __invoke(Agent $agent, ScriptRecord|CyclicModuleRecord|RealmRecord $referrer, StringValue $specifier, mixed $hostDefined, GraphLoadingState|PromiseCapabilityRecord $payload): UnusedValue;
}
