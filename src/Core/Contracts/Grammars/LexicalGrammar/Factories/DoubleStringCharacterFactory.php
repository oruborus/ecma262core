<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DoubleStringCharacter;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\EscapeSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LineContinuation;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface DoubleStringCharacterFactory
{
    public function create(
        int $sourceCharacter,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DoubleStringCharacter;

    public function createWithEscapeSequence(
        EscapeSequence $escapeSequence,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DoubleStringCharacter;

    public function createWithLineContinuation(
        LineContinuation $lineContinuation,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DoubleStringCharacter;
}
