<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OctalDigit;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface OctalDigitFactory
{
    public function create(
        int $codePoint,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): OctalDigit;
}
