<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleEscapeCharacter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface SingleEscapeCharacterFactory
{
    /** @param 34|39|92|98|102|110|114|116|118 $codePoint */
    public function create(
        int $codePoint,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): SingleEscapeCharacter;
}
