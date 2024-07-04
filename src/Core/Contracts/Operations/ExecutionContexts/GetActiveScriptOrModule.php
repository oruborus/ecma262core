<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ExecutionContexts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ScriptRecord;
use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;

interface GetActiveScriptOrModule
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getactivescriptormodule
     */
    public function __invoke(Agent $agent): ScriptRecord|ModuleRecord|NullValue;
}
