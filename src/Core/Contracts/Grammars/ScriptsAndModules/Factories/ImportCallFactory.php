<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions\ImportCall;

interface ImportCallFactory
{
    public function create(AssignmentExpression $assignmentExpression): ImportCall;
}
