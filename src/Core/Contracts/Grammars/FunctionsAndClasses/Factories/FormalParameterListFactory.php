<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameter;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameterList;

interface FormalParameterListFactory
{
    public function create(FormalParameterList $formalParameterList, FormalParameter $formalParameter): FormalParameterList;
}
