<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleStringCharacter;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleStringCharacters;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface SingleStringCharactersFactory
{
    public function create(
        SingleStringCharacter $singleStringCharacter,
        SingleStringCharacters $singleStringCharacters,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleStringCharacters;
}
