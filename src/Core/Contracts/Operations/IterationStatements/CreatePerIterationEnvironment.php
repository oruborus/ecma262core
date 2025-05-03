<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IterationStatements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface CreatePerIterationEnvironment
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createperiterationenvironment
     *
     * @param ListValue<StringValue> $perIterationBindings
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ListValue $perIterationBindings): UndefinedValue;
}
