<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncConciseBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncFunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ExpressionBody;

interface AsyncConciseBodyFactory
{
    public function createWithExpressionBody(ExpressionBody $expressionBody): AsyncConciseBody;

    public function createWithAsyncFunctionBody(AsyncFunctionBody $asyncFunctionBody): AsyncConciseBody;
}
