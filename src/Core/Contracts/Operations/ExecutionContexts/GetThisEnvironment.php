<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ExecutionContexts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;

interface GetThisEnvironment
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getthisenvironment
     */
    public function __invoke(Agent $agent): EnvironmentRecord;
}
