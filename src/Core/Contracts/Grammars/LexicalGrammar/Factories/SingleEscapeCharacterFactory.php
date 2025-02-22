<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\SingleEscapeCharacter;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface SingleEscapeCharacterFactory
{
    /** @param 34|39|92|98|102|110|114|116|118 $codePoint */
    public function create(
        int $codePoint,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): SingleEscapeCharacter;
}
