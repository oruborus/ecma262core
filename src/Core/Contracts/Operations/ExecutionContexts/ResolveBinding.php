<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ExecutionContexts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface ResolveBinding
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-resolvebinding
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, StringValue $name, null|EnvironmentRecord|UndefinedValue $env = null): ReferenceRecord;
}
