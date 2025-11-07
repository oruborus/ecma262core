<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\FromClause;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleSpecifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FromClauseFactory
{
    public function create(
        ModuleSpecifier $moduleSpecifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FromClause;
}
