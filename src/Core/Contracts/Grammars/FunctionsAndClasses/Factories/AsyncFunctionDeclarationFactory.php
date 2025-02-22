<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncFunctionBody;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncFunctionDeclaration;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\FormalParameters;

interface AsyncFunctionDeclarationFactory
{
    public function create(
        ?BindingIdentifier $bindingIdentifier,
        FormalParameters $formalParameters,
        AsyncFunctionBody $asyncFunctionBody,
    ): AsyncFunctionDeclaration;
}
