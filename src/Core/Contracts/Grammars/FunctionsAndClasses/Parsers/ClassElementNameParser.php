<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ClassElementNameParser
{
    /**
     * @see https://tc39.es/ecma262/#prod-ClassElementName
     */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?ClassElementName;
}
