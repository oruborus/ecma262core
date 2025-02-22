<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ParenthesizedExpression;

interface ParenthesizedExpressionFactory
{
    public function create(Expression $expression): ParenthesizedExpression;
}
