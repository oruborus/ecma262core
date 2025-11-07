<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MultiplicativeOperator;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface MultiplicativeOperatorParser
{
    /** @see https://tc39.es/ecma262/#prod-MultiplicativeOperator */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?MultiplicativeOperator;
}
