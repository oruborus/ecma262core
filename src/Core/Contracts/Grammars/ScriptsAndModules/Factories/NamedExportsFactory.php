<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportsList;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\NamedExports;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface NamedExportsFactory
{
    public function create(
        ExportsList $exportsList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): NamedExports;

    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): NamedExports;
}
