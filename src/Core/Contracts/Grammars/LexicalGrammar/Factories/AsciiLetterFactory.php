<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\AsciiLetter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface AsciiLetterFactory
{
    public function create(
        int $codePoint,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): AsciiLetter;
}
