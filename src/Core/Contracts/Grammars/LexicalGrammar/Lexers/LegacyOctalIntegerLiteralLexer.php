<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface LegacyOctalIntegerLiteralLexer
{
    /** @see https://tc39.es/ecma262/#prod-LegacyOctalIntegerLiteral */
    public function tokenize(
        SourceText $sourceText,
        Position $position,
        Parameters $parameters,
    ): ?LegacyOctalIntegerLiteral;
}
