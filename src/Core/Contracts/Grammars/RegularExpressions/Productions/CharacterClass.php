<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Values\PatternEvaluationResult;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface CharacterClass extends Atom
{
    /** @see https://tc39.es/ecma262/#sec-compilecharacterclass */
    public function compileCharacterClass(RegExpRecord $rer): PatternEvaluationResult;
}
