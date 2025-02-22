<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentPattern;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LeftHandSideExpression;

interface AssignmentPatternCoveredByLeftHandSideExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#prod-AssignmentPattern
     *
     * NOTE: It might be better to parse the assignment patterns right when encountering an array or object literal
     */
    public function __invoke(Agent $agent, LeftHandSideExpression $leftHandSideExpression): AssignmentPattern;
}
