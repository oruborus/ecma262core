<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierPartChar;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionFlags;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface RegularExpressionFlagsFactory
{
    public function create(
        RegularExpressionFlags $regularExpressionFlags,
        IdentifierPartChar $identifierPartChar,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): RegularExpressionFlags;

    public function createEmpty(
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): RegularExpressionFlags;
}
