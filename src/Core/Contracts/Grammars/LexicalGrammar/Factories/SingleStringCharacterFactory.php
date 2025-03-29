<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\EscapeSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\LineContinuation;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleStringCharacter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface SingleStringCharacterFactory
{
    public function create(
        int $sourceCharacter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleStringCharacter;

    public function createWithEscapeSequence(
        EscapeSequence $escapeSequence,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleStringCharacter;

    public function createWithLineContinuation(
        LineContinuation $lineContinuation,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleStringCharacter;
}
