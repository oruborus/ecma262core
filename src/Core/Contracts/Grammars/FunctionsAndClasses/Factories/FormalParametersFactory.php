<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameterList;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionRestParameter;

interface FormalParametersFactory
{
    public function create(
        ?FormalParameterList $formalParameterList,
        ?FunctionRestParameter $functionRestParameter,
    ): FormalParameters;

    public function createEmpty(): FormalParameters;
}
