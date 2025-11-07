<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\EmptyValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface ClassBody extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-nonconstructormethoddefinitions
     *
     * @return ListValue<ClassElement>
     */
    public function nonConstructorMethodDefinitions(): ListValue;

    /** @see https://tc39.es/ecma262/#sec-static-semantics-constructormethod */
    public function constructorMethod(): EmptyValue|ClassElement;
}
