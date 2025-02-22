<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\CharacterClassEscape;

interface CharacterClassEscapeFactory
{
    /** @param 68|83|87|100|115|119 $codePoint */
    public function create(int $codePoint): CharacterClassEscape;

    /**
     * @deprecated FIXME: Implement according to https://tc39.es/ecma262/#prod-UnicodePropertyValueExpression
     * @param 80|112 $codePoint
     */
    public function createWithUnicodePropertyValueExpression(int $codePoint, ?string $unicodePropertyName, string $unicodePropertyValue): CharacterClassEscape;
}
