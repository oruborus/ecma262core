<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

interface ModuleEnvironmentRecord extends DeclarativeEnvironmentRecord
{
    public function createImportBinding(Agent $agent, StringValue $n, ModuleRecord $m, StringValue $n2): UnusedValue;

    public function getThisBinding(Agent $agent): UndefinedValue;

    public function getSuperBase(): ObjectValue|UndefinedValue;
}
