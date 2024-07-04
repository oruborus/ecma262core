<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\EnvironmentRecords;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\DeclarativeEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;

interface NewDeclarativeEnvironment
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-newdeclarativeenvironment
     */
    public function __invoke(Agent $agent, NullValue|EnvironmentRecord $e): DeclarativeEnvironmentRecord;
}
