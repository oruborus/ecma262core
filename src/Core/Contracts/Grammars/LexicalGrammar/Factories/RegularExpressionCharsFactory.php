<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionChars;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionCharsFactory
{
    public function create(
        RegularExpressionChars $regularExpressionChars,
        RegularExpressionChar $regularExpressionChar,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionChars;

    public function createEmpty(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionChars;
}
