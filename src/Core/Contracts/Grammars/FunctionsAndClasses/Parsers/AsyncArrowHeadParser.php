<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncArrowHead;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AsyncArrowHeadParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-AsyncArrowHead
     */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?AsyncArrowHead;
}
