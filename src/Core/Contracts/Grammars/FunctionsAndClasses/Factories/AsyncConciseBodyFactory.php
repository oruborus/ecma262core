<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncConciseBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncFunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ExpressionBody;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface AsyncConciseBodyFactory
{
    public function createWithExpressionBody(
        ExpressionBody $expressionBody,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AsyncConciseBody;

    public function createWithAsyncFunctionBody(
        AsyncFunctionBody $asyncFunctionBody,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): AsyncConciseBody;
}
