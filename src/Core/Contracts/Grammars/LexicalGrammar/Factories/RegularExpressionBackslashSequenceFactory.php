<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionBackslashSequence;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionNonTerminator;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionBackslashSequenceFactory
{
    public function create(
        RegularExpressionNonTerminator $regularExpressionNonTerminator,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionBackslashSequence;
}
