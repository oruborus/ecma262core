<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineCommentChars;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineNotAsteriskChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PostAsteriskCommentChars;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface MultiLineCommentCharsFactory
{
    public function create(
        MultiLineNotAsteriskChar $multiLineNotAsteriskChar,
        MultiLineCommentChars $multiLineCommentChars,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): MultiLineCommentChars;

    public function createAsterisk(
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): MultiLineCommentChars;

    public function createWithAsteriskAndPostAsteriskCommentChars(
        PostAsteriskCommentChars $postAsteriskCommentChars,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): MultiLineCommentChars;
}
