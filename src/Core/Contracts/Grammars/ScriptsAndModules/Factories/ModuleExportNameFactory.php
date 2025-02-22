<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\IdentifierName;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\StringLiteral;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ModuleExportName;

interface ModuleExportNameFactory
{
    public function create(IdentifierName|StringLiteral $name): ModuleExportName;
}
