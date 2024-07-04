<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface Binding extends Node
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-iteratorbindinginitialization
     *
     * @throws AbruptCompletion
     */
    public function iteratorBindingInitialization(Agent $agent, IteratorRecord $iteratorRecord, EnvironmentRecord|UndefinedValue $environment): LanguageValue;
}
