<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineComment;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineCommentChars;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface SingleLineCommentFactory
{
    public function create(
        SingleLineCommentChars $singleLineCommentChars,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleLineComment;

    public function createEmpty(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleLineComment;
}
