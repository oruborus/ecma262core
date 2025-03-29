<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineCommentChar;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface SingleLineCommentCharFactory
{
    /** @param int<0, 1114111> $sourceCharacter */
    public function create(
        int $sourceCharacter,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleLineCommentChar;
}
