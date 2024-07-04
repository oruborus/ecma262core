<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\GraphLoadingState;
use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface ContinueModuleLoading
{
    /**
     * @see https://tc39.es/ecma262/#sec-ContinueModuleLoading
     */
    public function __invoke(Agent $agent, GraphLoadingState $state, ModuleRecord|ThrowCompletion $moduleCompletion): UnusedValue;
}
