<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OtherPunctuator;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface OtherPunctuatorFactory
{
    public function create(
        InputElementType $type,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): OtherPunctuator;
}
