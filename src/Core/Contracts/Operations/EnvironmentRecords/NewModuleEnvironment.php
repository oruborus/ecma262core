<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\EnvironmentRecords;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ModuleEnvironmentRecord;

interface NewModuleEnvironment
{
    /**
     * @see https://tc39.es/ecma262/#sec-newmoduleenvironment
     */
    public function __invoke(Agent $agent, EnvironmentRecord $e): ModuleEnvironmentRecord;
}
