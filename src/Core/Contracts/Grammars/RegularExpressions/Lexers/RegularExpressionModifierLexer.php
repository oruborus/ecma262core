<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\RegularExpressionModifier;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface RegularExpressionModifierLexer
{
    /** @see https://tc39.es/ecma262/#prod-RegularExpressionModifier */
    public function tokenize(SourceText $sourceText, Position $position, Parameters $parameters): ?RegularExpressionModifier;
}
