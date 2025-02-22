<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\Script;

interface ScriptFactory
{
    public function create(): Script;
}
