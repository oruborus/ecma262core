<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ImportCalls;

use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\PromiseCapabilityRecord;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface ContinueDynamicImport
{
    /**
     * @see https://tc39.es/ecma262/#sec-ContinueDynamicImport
     */
    public function __invoke(PromiseCapabilityRecord $promiseCapability, ModuleRecord|ThrowCompletion $moduleCompletion): UnusedValue;
}
