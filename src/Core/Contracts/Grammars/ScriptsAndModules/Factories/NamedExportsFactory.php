<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ExportsList;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\NamedExports;

interface NamedExportsFactory
{
    public function create(ExportsList $exportsList): NamedExports;

    public function createEmpty(): NamedExports;
}
