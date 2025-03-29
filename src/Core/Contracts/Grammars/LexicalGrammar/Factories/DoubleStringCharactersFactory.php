<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DoubleStringCharacter;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DoubleStringCharacters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface DoubleStringCharactersFactory
{
    public function create(
        DoubleStringCharacter $singleStringCharacter,
        DoubleStringCharacters $singleStringCharacters,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): DoubleStringCharacters;
}
