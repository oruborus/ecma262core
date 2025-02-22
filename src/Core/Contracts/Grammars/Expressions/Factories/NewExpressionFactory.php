<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\NewExpression;

interface NewExpressionFactory
{
    public function create(NewExpression $newExpression): NewExpression;
}
