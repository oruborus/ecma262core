<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameter;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameterList;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface FormalParameterListFactory
{
    public function create(
        FormalParameterList $formalParameterList,
        FormalParameter $formalParameter,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): FormalParameterList;
}
