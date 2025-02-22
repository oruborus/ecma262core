<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\ExponentIndicator;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\ExponentPart;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SignedInteger;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface ExponentPartFactory
{
    public function create(
        ExponentIndicator $exponentIndicator,
        SignedInteger $signedInteger,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): ExponentPart;
}
