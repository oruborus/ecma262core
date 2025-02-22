<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\GeneratorBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\GeneratorExpression;

interface GeneratorExpressionFactory
{
    public function create(
        ?BindingIdentifier $bindingIdentifier,
        FormalParameters $formalParameters,
        GeneratorBody $generatorBody
    ): GeneratorExpression;
}
