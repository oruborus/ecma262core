<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineComment;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleLineCommentChars;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface SingleLineCommentFactory
{
    public function create(
        SingleLineCommentChars $singleLineCommentChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleLineComment;

    public function createEmpty(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleLineComment;
}
