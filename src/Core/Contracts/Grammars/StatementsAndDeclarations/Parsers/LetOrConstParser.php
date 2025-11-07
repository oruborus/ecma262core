<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\LetOrConst;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface LetOrConstParser
{
    /** @see https://tc39.es/ecma262/#prod-LetOrConst */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?LetOrConst;
}
