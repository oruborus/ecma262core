<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\DoWhileStatement;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface DoWhileStatementParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-DoWhileStatement
     *
     * @throws ThrowCompletion
     */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?DoWhileStatement;
}
