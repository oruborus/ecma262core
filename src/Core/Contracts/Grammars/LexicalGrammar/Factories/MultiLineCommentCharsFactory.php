<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineCommentChars;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineNotAsteriskChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PostAsteriskCommentChars;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface MultiLineCommentCharsFactory
{
    public function create(
        MultiLineNotAsteriskChar $multiLineNotAsteriskChar,
        MultiLineCommentChars $multiLineCommentChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): MultiLineCommentChars;

    public function createAsterisk(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): MultiLineCommentChars;

    public function createWithAsteriskAndPostAsteriskCommentChars(
        PostAsteriskCommentChars $postAsteriskCommentChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): MultiLineCommentChars;
}
