<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionClassChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionClassChars;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionClassCharsFactory
{
    public function create(
        RegularExpressionClassChars $regularExpressionChars,
        RegularExpressionClassChar $regularExpressionChar,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionClassChars;

    public function createEmpty(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionClassChars;
}
