<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LegacyOctalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigit;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface LegacyOctalIntegerLiteralFactory
{
    public function createFirst(
        OctalDigit $octalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalIntegerLiteral;

    public function create(
        LegacyOctalIntegerLiteral $legacyOctalIntegerLiteral,
        OctalDigit $octalDigit,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): LegacyOctalIntegerLiteral;
}
