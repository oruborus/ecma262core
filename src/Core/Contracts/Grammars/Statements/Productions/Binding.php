<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface Binding extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-iteratorbindinginitialization
     *
     * @throws AbruptCompletion
     */
    public function iteratorBindingInitialization(IteratorRecord $iteratorRecord, EnvironmentRecord|UndefinedValue $environment): LanguageValue;
}
