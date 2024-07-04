<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface ExecuteAsyncModule
{
    /**
     * @see https://tc39.es/ecma262/#sec-execute-async-module
     */
    public function __invoke(Agent $agent, CyclicModuleRecord $module): UnusedValue;
}
