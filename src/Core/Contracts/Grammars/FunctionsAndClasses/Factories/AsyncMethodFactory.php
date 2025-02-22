<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncFunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncMethod;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\UniqueFormalParameters;

interface AsyncMethodFactory
{
    public function create(
        ClassElementName $classElementName,
        UniqueFormalParameters $uniqueFormalParameters,
        AsyncFunctionBody $asyncFunctionBody,
    ): AsyncMethod;
}
