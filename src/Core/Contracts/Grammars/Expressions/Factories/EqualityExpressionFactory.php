<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\EqualityExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\RelationalExpression;

interface EqualityExpressionFactory
{
    /** @param "=="|"!="|"==="|"!==" $operator */
    public function create(
        EqualityExpression $equalityExpression,
        string $operator,
        RelationalExpression $relationalExpression,
    ): EqualityExpression;
}
