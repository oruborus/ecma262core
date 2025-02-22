<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportFromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleExportName;

interface ExportFromClauseFactory
{
    public function create(): ExportFromClause;

    public function createNamed(ModuleExportName $moduleExportName): ExportFromClause;
}
