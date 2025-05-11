<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface ClassElementList extends ClassBody
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-computedpropertycontains
     */
    function computedPropertyContains(string|InputElementType $symbol): BooleanValue;
}
