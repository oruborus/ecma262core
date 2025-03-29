<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\CharSet;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface ClassContents extends RegularExpressionNode
{
    /** @see https://tc39.es/ecma262/#sec-compiletocharset */
    public function compileToCharset(Agent $agent, RegExpRecord $rer): CharSet;
}
