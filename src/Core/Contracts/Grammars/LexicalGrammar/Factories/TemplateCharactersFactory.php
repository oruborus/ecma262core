<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateCharacter;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateCharacters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface TemplateCharactersFactory
{
    public function create(
        TemplateCharacter $templateCharacter,
        TemplateCharacters $templateCharacters,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): TemplateCharacters;
}
