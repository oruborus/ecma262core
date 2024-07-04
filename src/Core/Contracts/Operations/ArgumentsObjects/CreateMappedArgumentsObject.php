<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArgumentsObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\UniqueFormalParameters;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;

interface CreateMappedArgumentsObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createmappedargumentsobject
     *
     * @param ListValue<int, LanguageValue> $argumentsList
     */
    public function __invoke(Agent $agent, ObjectValue $func, UniqueFormalParameters $formals, ListValue $argumentsList, EnvironmentRecord $env): ObjectValue;
}
