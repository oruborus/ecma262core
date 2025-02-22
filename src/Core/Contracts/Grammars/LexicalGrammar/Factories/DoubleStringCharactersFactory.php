<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DoubleStringCharacter;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\DoubleStringCharacters;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface DoubleStringCharactersFactory
{
    public function create(
        DoubleStringCharacter $singleStringCharacter,
        DoubleStringCharacters $singleStringCharacters,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): DoubleStringCharacters;
}
