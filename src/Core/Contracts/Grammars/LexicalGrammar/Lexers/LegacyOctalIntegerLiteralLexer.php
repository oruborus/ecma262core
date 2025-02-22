<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface LegacyOctalIntegerLiteralLexer
{
    /** @see https://tc39.es/ecma262/#prod-LegacyOctalIntegerLiteral */
    public function tokenize(
        Agent $agent,
        SourceText $sourceText,
        PositionalInformation $position,
        Parameters $parameters,
    ): ?LegacyOctalIntegerLiteral;
}
