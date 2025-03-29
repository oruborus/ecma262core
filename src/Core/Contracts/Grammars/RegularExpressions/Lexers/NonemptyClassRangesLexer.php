<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\NonemptyClassRanges;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface NonemptyClassRangesLexer
{
    /**
     * @see https://tc39.es/ecma262/#prod-NonemptyClassRanges
     *
     * @throws ThrowCompletion
     */
    public function tokenize(Agent $agent, SourceText $sourceText, Position $position, Parameters $parameters): ?NonemptyClassRanges;
}
