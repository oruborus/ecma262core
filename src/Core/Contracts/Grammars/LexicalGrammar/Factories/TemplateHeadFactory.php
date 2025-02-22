<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateCharacters;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\TemplateHead;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface TemplateHeadFactory
{
    public function create(
        ?TemplateCharacters $templateCharacters,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): TemplateHead;
}
