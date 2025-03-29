<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionNonTerminator;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionNonTerminatorFactory
{
    public function create(
        int $sourceCharacter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionNonTerminator;
}
