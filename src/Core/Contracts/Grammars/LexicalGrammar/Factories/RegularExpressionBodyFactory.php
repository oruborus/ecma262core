<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionChars;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionFirstChar;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionBodyFactory
{
    public function create(
        RegularExpressionFirstChar $regularExpressionFirstChar,
        RegularExpressionChars $regularExpressionChars,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionBody;
}
