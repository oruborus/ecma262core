<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierPartChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionFlags;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionFlagsFactory
{
    public function create(
        RegularExpressionFlags $regularExpressionFlags,
        IdentifierPartChar $identifierPartChar,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionFlags;

    public function createEmpty(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): RegularExpressionFlags;
}
