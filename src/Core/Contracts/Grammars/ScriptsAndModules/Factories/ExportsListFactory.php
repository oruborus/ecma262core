<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportsList;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportSpecifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ExportsListFactory
{
    public function create(
        ExportsList $exportsList,
        ExportSpecifier $exportSpecifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportsList;
}
