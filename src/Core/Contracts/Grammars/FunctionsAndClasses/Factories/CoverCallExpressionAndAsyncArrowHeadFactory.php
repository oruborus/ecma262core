<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MemberExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\CoverCallExpressionAndAsyncArrowHead;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface CoverCallExpressionAndAsyncArrowHeadFactory
{
    public function create(
        MemberExpression $memberExpression,
        Arguments $arguments,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): CoverCallExpressionAndAsyncArrowHead;
}
