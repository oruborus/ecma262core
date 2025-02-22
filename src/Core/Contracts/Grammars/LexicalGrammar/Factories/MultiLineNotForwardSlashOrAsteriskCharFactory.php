<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\MultiLineNotForwardSlashOrAsteriskChar;
use Oru\EcmaScript\Core\Contracts\PositionalInformation;
use Oru\EcmaScript\Core\Contracts\SourceText;

interface MultiLineNotForwardSlashOrAsteriskCharFactory
{
    /** @param int<0, 41>|int<43, 46>|int<48, 1114111> $sourceCharacter */
    public function create(
        int $sourceCharacter,
        SourceText $sourceText,
        PositionalInformation $position,
        PositionalInformation $next,
    ): MultiLineNotForwardSlashOrAsteriskChar;
}
