<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OptionalChainingPunctuator;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface OptionalChainingPunctuatorFactory
{
    public function create(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): OptionalChainingPunctuator;
}
