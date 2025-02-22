<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigits;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexIntegerLiteral;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface HexIntegerLiteralFactory
{
    public function create(
        HexDigits $hexDigits,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): HexIntegerLiteral;
}
