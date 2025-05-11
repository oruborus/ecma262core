<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Lexers;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionFlags;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionFlagsLexer
{
    /** @see https://tc39.es/ecma262/#prod-RegularExpressionFlags */
    public function tokenize(
        SourceText $sourceText,
        Position $position,
        Parameters $parameters,
    ): RegularExpressionFlags;
}
