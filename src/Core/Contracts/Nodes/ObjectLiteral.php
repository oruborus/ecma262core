<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ObjectLiteral extends PrimaryExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-destructuring-assignment
     *
     * @throws ThrowCompletion
     */
    public function coveredAssignmentPattern(Agent $agent): AssignmentPattern;
}
