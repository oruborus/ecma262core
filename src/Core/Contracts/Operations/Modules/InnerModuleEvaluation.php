<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface InnerModuleEvaluation
{
    /**
     * @see https://tc39.es/ecma262/#sec-innermoduleevaluation
     *
     * @param ListValue<CyclicModuleRecord> $stack
     * 
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ModuleRecord $module, ListValue $stack, NumberValue $index): NumberValue;
}
