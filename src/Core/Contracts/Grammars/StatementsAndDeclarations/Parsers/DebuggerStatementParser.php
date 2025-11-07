<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\DebuggerStatement;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface DebuggerStatementParser
{
    /** @see https://tc39.es/ecma262/#prod-DebuggerStatement */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?DebuggerStatement;
}
