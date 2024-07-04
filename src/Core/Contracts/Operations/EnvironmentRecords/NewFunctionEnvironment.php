<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\EnvironmentRecords;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\FunctionEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface NewFunctionEnvironment
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-newfunctionenvironment
     */
    public function __invoke(Agent $agent, ObjectValue $function, UndefinedValue|ObjectValue $newTarget): FunctionEnvironmentRecord;
}
