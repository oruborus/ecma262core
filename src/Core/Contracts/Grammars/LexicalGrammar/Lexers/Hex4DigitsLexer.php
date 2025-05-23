<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\Hex4Digits;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface Hex4DigitsLexer
{
    /** @see https://tc39.es/ecma262/#prod-Hex4Digits */
    public function tokenize(
        SourceText $sourceText,
        Position $position,
        Parameters $parameters,
    ): ?Hex4Digits;
}
