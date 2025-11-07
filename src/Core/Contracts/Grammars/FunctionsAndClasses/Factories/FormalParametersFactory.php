<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameterList;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FunctionRestParameter;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FormalParametersFactory
{
    public function create(
        FormalParameterList $formalParameterList,
        FunctionRestParameter $functionRestParameter,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FormalParameters;

    public function createWithFormalParameterList(
        FormalParameterList $formalParameterList,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FormalParameters;

    public function createEmpty(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FormalParameters;
}
