<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\OtherPunctuator;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface OtherPunctuatorFactory
{
    public function create(
        InputElementType $type,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): OtherPunctuator;
}
