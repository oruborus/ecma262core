<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineCommentChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineCommentChars;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface SingleLineCommentCharsFactory
{
    public function create(
        SingleLineCommentChar $singleLineCommentChar,
        SingleLineCommentChars $singleLineCommentChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleLineCommentChars;
}
