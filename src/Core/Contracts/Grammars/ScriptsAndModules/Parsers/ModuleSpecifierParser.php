<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Parsers;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleSpecifier;
use Oru\EcmaScript\Core\Contracts\Parameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ModuleSpecifierParser
{
    /** @see https://tc39.es/ecma262/#prod-ModuleSpecifier */
    public function parse(SourceCode $sourceCode, Position $position, Parameters $parameters): ?ModuleSpecifier;
}
