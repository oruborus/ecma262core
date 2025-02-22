<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ScriptBody;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\StatementList;

interface ScriptBodyFactory
{
    public function create(StatementList $statementList, bool $strict): ScriptBody;
}
