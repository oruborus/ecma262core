<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CyclicModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface GetImportedModule
{
    /**
     * @see https://tc39.es/ecma262/#sec-GetImportedModule
     */
    public function __invoke(Agent $agent, CyclicModuleRecord $referrer, StringValue $specifier): ModuleRecord;
}
