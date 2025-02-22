<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportSpecifier;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleExportName;

interface ExportSpecifierFactory
{
    public function create(ModuleExportName $moduleExportName, ModuleExportName $alias): ExportSpecifier;
}
