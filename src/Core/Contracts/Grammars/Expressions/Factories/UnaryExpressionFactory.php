<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UnaryExpression;

interface UnaryExpressionFactory
{
    /** @param "delete"|"void"|"typeof"|"+"|"-"|"~"|"!" $unaryOperator */
    public function create(string $unaryOperator, UnaryExpression $unaryExpression): UnaryExpression;
}
