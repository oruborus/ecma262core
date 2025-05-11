<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Lexers;

use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\QuantifierPrefix;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceText;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface QuantifierPrefixLexer
{
    /**
     * @see https://tc39.es/ecma262/#prod-QuantifierPrefix
     *
     * @throws ThrowCompletion
     */
    public function tokenize(SourceText $sourceText, Position $position, Parameters $parameters): ?QuantifierPrefix;
}
