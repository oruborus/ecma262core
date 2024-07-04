<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface AsyncModuleExecutionRejected
{
    /**
     * @see https://tc39.es/ecma262/#sec-async-module-execution-rejected
     */
    public function __invoke(Agent $agent, CyclicModuleRecord $module, LanguageValue $error): UnusedValue;
}
