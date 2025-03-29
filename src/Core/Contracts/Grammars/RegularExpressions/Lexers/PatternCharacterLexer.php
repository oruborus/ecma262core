<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\PatternCharacter;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;

interface PatternCharacterLexer
{
    /** @see https://tc39.es/ecma262/#prod-PatternCharacter */
    public function tokenize(Agent $agent, SourceText $sourceText, Position $position, Parameters $parameters): ?PatternCharacter;
}
