<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncGeneratorBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncGeneratorDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameters;

interface AsyncGeneratorDeclarationFactory
{
    public function create(
        ?BindingIdentifier $bindingIdentifier,
        FormalParameters $formalParameters,
        AsyncGeneratorBody $asyncGeneratorBody,
    ): AsyncGeneratorDeclaration;
}
