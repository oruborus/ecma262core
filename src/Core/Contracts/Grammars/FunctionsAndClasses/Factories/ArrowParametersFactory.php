<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowFormalParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowParameters;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ArrowParametersFactory
{
    public function createWithArrowFormalParameters(
        ArrowFormalParameters $arrowFormalParameters,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrowParameters;

    public function createWithBindingIdentifier(
        BindingIdentifier $bindingIdentifier,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ArrowParameters;
}
