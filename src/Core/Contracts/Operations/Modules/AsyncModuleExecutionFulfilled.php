<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface AsyncModuleExecutionFulfilled
{
    /**
     * @see https://tc39.es/ecma262/#sec-async-module-execution-fulfilled
     */
    public function __invoke(CyclicModuleRecord $module): UnusedValue;
}
