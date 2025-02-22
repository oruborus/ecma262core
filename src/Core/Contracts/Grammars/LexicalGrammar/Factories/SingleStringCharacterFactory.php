<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\EscapeSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LineContinuation;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleStringCharacter;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface SingleStringCharacterFactory
{
    public function create(
        int $sourceCharacter,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleStringCharacter;

    public function createWithEscapeSequence(
        EscapeSequence $escapeSequence,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleStringCharacter;

    public function createWithLineContinuation(
        LineContinuation $lineContinuation,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleStringCharacter;
}
