<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NonOctalDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface NonOctalDigitFactory
{
    public function create(
        int $codePoint,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): NonOctalDigit;
}
