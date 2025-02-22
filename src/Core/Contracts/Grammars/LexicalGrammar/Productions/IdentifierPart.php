<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\SourceText;

interface IdentifierPart extends InputElement
{
    public function identifierCodePoint(): SourceText;

    public function containsUnicodeEscapeSequence(): bool;
}
