<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ArgumentList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;

interface ArgumentListFactory
{
    public function create(?ArgumentList $argumentList, AssignmentExpression $assignmentExpression, bool $isRestParameter): ArgumentList;
}
