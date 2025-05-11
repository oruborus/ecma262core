<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;

interface ArrayLiteral extends PrimaryExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-destructuring-assignment
     *
     * @throws ThrowCompletion
     */
    public function coveredAssignmentPattern(): AssignmentPattern;
}
