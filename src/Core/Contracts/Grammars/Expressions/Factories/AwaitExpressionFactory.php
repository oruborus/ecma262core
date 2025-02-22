<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AwaitExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UnaryExpression;

interface AwaitExpressionFactory
{
    public function create(UnaryExpression $unaryExpression): AwaitExpression;
}
