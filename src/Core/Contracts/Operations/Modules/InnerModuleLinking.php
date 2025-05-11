<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface InnerModuleLinking
{
    /**
     * @see https://tc39.es/ecma262/#sec-InnerModuleLinking
     *
     * @param ListValue<CyclicModuleRecord> $stack
     * 
     * @throws AbruptCompletion
     */
    public function __invoke(ModuleRecord $module, ListValue $stack, NumberValue $index): NumberValue;
}
