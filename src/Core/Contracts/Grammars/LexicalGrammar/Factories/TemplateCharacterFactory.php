<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\NotEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateCharacter;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateEscapeSequence;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface TemplateCharacterFactory
{
    public function create(
        TemplateEscapeSequence|NotEscapeSequence $content,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): TemplateCharacter;

    public function createWithDollar(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): TemplateCharacter;

    /** @param int<0, 35>|int<37, 91>|int<93, 95>|int<97, 1114111> $sourceCharacter */
    public function createWithSourceCharacter(
        int $sourceCharacter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): TemplateCharacter;
}
