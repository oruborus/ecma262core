<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface IdentifierStart extends IdentifierName
{
    public function identifierCodePoint(): SourceText;
}
