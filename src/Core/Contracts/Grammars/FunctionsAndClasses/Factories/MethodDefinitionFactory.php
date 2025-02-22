<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassElementName;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\MethodDefinition;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\PropertySetParameterList;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\UniqueFormalParameters;

interface MethodDefinitionFactory
{
    public function create(
        ClassElementName $classElementName,
        UniqueFormalParameters $uniqueFormalParameters,
        FunctionBody $functionBody,
    ): MethodDefinition;

    public function createGetter(
        ClassElementName $classElementName,
        FunctionBody $functionBody,
    ): MethodDefinition;

    public function createSetter(
        ClassElementName $classElementName,
        PropertySetParameterList $propertySetParameterList,
        FunctionBody $functionBody,
    ): MethodDefinition;
}
