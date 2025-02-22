<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

interface Punctuator extends CommonToken
{
    public function getType(): InputElementType;
}
