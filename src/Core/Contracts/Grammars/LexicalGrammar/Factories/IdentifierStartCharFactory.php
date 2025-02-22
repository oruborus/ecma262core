<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierStartChar;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface IdentifierStartCharFactory
{
    public function createDollar(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): IdentifierStartChar;

    public function createUnderscore(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): IdentifierStartChar;
}
