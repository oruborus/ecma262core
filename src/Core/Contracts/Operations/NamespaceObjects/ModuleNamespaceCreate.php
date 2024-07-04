<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\NamespaceObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface ModuleNamespaceCreate
{
    /**
     * @see https://tc39.es/ecma262/#sec-modulenamespacecreate
     * @see https://tc39.es/ecma262/#table-internal-slots-of-module-namespace-exotic-objects
     * @see https://tc39.es/ecma262/#sec-module-namespace-exotic-objects
     * @see https://tc39.es/ecma262/#sec-module-namespace-objects
     * 
     * @param ListValue<int, StringValue> $exports
     */
    public function __invoke(Agent $agent, CyclicModuleRecord $module, ListValue $exports): ObjectValue;
}
