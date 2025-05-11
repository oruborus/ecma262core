<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Values\Direction;
use Oru\EcmaScript\Core\Contracts\Values\Matcher;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface Atom extends Term
{
    /** @see https://tc39.es/ecma262/#sec-compileatom */
    public function compileAtom(RegExpRecord $rer, Direction $direction): Matcher;
}
