<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineComment;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineCommentChars;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface MultiLineCommentFactory
{
    public function create(
        MultiLineCommentChars $multiLineCommentChars,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): MultiLineComment;

    public function createEmpty(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): MultiLineComment;
}
