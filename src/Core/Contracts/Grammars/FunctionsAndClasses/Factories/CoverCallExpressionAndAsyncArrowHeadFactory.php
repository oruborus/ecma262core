<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MemberExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\CoverCallExpressionAndAsyncArrowHead;

interface CoverCallExpressionAndAsyncArrowHeadFactory
{
    public function create(MemberExpression $memberExpression, Arguments $arguments): CoverCallExpressionAndAsyncArrowHead;
}
