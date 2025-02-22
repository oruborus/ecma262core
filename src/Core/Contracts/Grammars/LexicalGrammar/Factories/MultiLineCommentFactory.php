<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineComment;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineCommentChars;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface MultiLineCommentFactory
{
    public function create(
        MultiLineCommentChars $multiLineCommentChars,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): MultiLineComment;

    public function createEmpty(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): MultiLineComment;
}
