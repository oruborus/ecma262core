<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface ClassTail extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-classdefinitionevaluation
     *
     * @throws AbruptCompletion
     */
    public function classDefinitionEvaluation(UndefinedValue|StringValue $classBinding, StringValue|SymbolValue $className): ObjectValue;
}
