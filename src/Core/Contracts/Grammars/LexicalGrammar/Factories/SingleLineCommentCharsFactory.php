<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineCommentChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineCommentChars;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface SingleLineCommentCharsFactory
{
    public function create(
        SingleLineCommentChar $singleLineCommentChar,
        SingleLineCommentChars $singleLineCommentChars,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleLineCommentChars;
}
