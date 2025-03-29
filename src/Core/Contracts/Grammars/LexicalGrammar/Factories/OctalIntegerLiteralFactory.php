<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface OctalIntegerLiteralFactory
{
    public function create(
        OctalDigits $octalDigits,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): OctalIntegerLiteral;
}
