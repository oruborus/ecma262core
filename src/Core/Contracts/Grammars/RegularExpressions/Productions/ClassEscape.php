<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasCharacterValue;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsCharacterClass;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface ClassEscape extends RegularExpressionNode, HasIsCharacterClass, HasCharacterValue
{
    /** @see https://tc39.es/ecma262/#sec-compiletocharset */
    public function compileToCharset(RegExpRecord $rer): CharSet;
}
