<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\HexDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface HexDigitFactory
{
    public function create(
        int $codePoint,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): HexDigit;
}
