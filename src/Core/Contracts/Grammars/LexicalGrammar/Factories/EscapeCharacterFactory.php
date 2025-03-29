<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\EscapeCharacter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface EscapeCharacterFactory
{
    public function createX(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): EscapeCharacter;

    public function createU(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): EscapeCharacter;
}
