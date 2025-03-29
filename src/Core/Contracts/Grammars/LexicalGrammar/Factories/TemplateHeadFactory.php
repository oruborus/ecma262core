<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateCharacters;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateHead;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface TemplateHeadFactory
{
    public function create(
        ?TemplateCharacters $templateCharacters,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): TemplateHead;
}
