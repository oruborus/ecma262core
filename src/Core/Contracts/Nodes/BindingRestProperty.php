<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface BindingRestProperty extends HasBoundNames, Binding
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-destructuring-binding-patterns-runtime-semantics-restbindinginitialization
     *
     * @param ListValue<int, StringValue|SymbolValue> $excludedNames
     * @throws AbruptCompletion
     */
    public function restBindingInitialization(Agent $agent, LanguageValue $value, UndefinedValue|EnvironmentRecord $environment, ListValue $excludedNames): LanguageValue;
}