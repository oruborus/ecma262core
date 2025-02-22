<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineCommentChars;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineNotForwardSlashOrAsteriskChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PostAsteriskCommentChars;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface PostAsteriskCommentCharsFactory
{
    public function create(
        MultiLineNotForwardSlashOrAsteriskChar $multiLineNotForwardSlashOrAsteriskChar,
        MultiLineCommentChars $multiLineCommentChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): PostAsteriskCommentChars;

    public function createAsterisk(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): PostAsteriskCommentChars;

    public function createWithAsteriskAndPostAsteriskCommentChars(
        PostAsteriskCommentChars $postAsteriskCommentChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): PostAsteriskCommentChars;
}
