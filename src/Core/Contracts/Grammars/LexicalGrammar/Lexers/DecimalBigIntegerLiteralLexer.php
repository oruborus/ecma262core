<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DecimalBigIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface DecimalBigIntegerLiteralLexer
{
    /** @see https://tc39.es/ecma262/#prod-DecimalBigIntegerLiteral */
    public function tokenize(
        Agent $agent,
        SourceText $sourceText,
        Position $position,
        Parameters $parameters,
    ): ?DecimalBigIntegerLiteral;
}
