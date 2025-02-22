<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncArrowBindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncArrowFunction;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncArrowHead;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncConciseBody;

interface AsyncArrowFunctionFactory
{
    public function createWithAsyncArrowBindingIdentifier(
        AsyncArrowBindingIdentifier $asyncArrowBindingIdentifier,
        AsyncConciseBody $asyncConciseBody,
    ): AsyncArrowFunction;

    public function createWithAsyncArrowHead(
        AsyncArrowHead $asyncArrowHead,
        AsyncConciseBody $asyncConciseBody,
    ): AsyncArrowFunction;
}
