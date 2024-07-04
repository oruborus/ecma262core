<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AssignmentOperators;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\Node;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface EvaluateStringOrNumericBinaryExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-evaluatestringornumericbinaryexpression
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, Node $leftOperand, string $opText, Node $righOperand): StringValue|NumberValue|BigIntValue;
}
