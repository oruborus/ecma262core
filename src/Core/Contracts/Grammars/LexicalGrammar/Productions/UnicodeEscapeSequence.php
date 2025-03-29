<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions;

use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface UnicodeEscapeSequence extends EscapeSequence, TemplateEscapeSequence
{
    /** @see https://tc39.es/ecma262/#sec-identifiercodepoint */
    public function identifierCodePoint(): SourceText;
}
