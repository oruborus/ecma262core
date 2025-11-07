<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\Module;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

/** @package Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories */
interface ModuleFactory
{
    public function create(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): Module;
}
