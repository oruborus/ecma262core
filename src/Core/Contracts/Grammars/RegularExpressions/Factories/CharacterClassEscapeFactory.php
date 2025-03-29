<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterClassEscape;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\UnicodePropertyValueExpression;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface CharacterClassEscapeFactory
{
    /** @param 68|83|87|100|115|119 $codePoint */
    public function create(
        int $codePoint,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): CharacterClassEscape;

    /** @param 80|112 $codePoint */
    public function createWithUnicodePropertyValueExpression(
        int $codePoint,
        UnicodePropertyValueExpression $unicodePropertyValueExpression,
        SourceText $sourceText,
        Position $position,
        Position $next,
    ): CharacterClassEscape;
}
