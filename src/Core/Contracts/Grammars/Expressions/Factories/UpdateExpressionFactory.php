<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LeftHandSideExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UnaryExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UpdateExpression;

interface UpdateExpressionFactory
{
    /** @param "++"|"--" $updateOperator */
    public function createPrefixed(string $updateOperator, UnaryExpression $unaryExpression): UpdateExpression;

    /** @param "++"|"--" $updateOperator */
    public function createPostfixed(LeftHandSideExpression $leftHandSideExpression, string $updateOperator): UpdateExpression;
}
