<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncGeneratorBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncGeneratorMethod;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\UniqueFormalParameters;

interface AsyncGeneratorMethodFactory
{
    public function create(
        ClassElementName $classElementName,
        UniqueFormalParameters $uniqueFormalParameters,
        AsyncGeneratorBody $asyncGeneratorBody,
    ): AsyncGeneratorMethod;
}
