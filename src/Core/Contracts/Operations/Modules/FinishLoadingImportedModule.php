<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\GraphLoadingState;
use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\PromiseCapabilityRecord;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\ScriptRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface FinishLoadingImportedModule
{
    /**
     * @see https://tc39.es/ecma262/#sec-FinishLoadingImportedModule
     */
    public function __invoke(ScriptRecord|CyclicModuleRecord|RealmRecord $referrer, StringValue $specifier, GraphLoadingState|PromiseCapabilityRecord $payload, ModuleRecord|ThrowCompletion $result): UnusedValue;
}
