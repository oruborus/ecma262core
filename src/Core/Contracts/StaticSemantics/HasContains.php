<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface HasContains
{
    /** @see https://tc39.es/ecma262/#sec-static-semantics-contains */
    public function contains(string|InputElementType $symbol): BooleanValue;
}
