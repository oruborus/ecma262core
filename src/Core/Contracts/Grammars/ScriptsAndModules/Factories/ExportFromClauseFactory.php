<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportFromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleExportName;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ExportFromClauseFactory
{
    public function create(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportFromClause;

    public function createAliased(
        ModuleExportName $moduleExportName,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ExportFromClause;
}
