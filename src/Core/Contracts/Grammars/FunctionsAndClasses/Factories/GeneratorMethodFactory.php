<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\GeneratorBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\GeneratorMethod;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\UniqueFormalParameters;

interface GeneratorMethodFactory
{
    public function create(
        ClassElementName $classElementName,
        UniqueFormalParameters $uniqueFormalParameters,
        GeneratorBody $generatorBody,
    ): GeneratorMethod;
}
