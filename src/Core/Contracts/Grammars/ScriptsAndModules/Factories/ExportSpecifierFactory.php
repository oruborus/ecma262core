<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportSpecifier;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleExportName;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ExportSpecifierFactory
{
    public function create(
        ModuleExportName $moduleExportName,
        ModuleExportName $alias,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportSpecifier;
}
