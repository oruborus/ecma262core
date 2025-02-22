<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ConciseBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ExpressionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionBody;

interface ConciseBodyFactory
{
    public function createWithExpressionBody(ExpressionBody $expressionBody): ConciseBody;

    public function createWithFunctionBody(FunctionBody $functionBody): ConciseBody;
}
