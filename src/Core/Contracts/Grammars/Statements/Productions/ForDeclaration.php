<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsDestructuring;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface ForDeclaration extends Node, HasBoundNames, HasIsDestructuring
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-fordeclarationbindinginitialization
     *
     * @throws AbruptCompletion
     */
    public function forDeclarationBindingInitialization(Agent $agent, LanguageValue $value, EnvironmentRecord $environment): LanguageValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-fordeclarationbindinginstantiation
     */
    public function forDeclarationBindingInstantiation(Agent $agent, EnvironmentRecord $environment): UnusedValue;
}
