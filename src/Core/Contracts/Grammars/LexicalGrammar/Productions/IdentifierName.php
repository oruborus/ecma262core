<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface IdentifierName extends PrivateIdentifier
{
    public function getType(): InputElementType;

    /**
     * @see https://tc39.es/ecma262/#sec-identifiercodepoints
     *
     * @return ListValue<non-negative-int, int<0,1114111>>
     */
    public function identifierCodePoints(): ListValue;
}
