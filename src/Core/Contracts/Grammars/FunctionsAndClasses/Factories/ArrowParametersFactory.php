<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowFormalParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowParameters;

interface ArrowParametersFactory
{
    public function createWithArrowFormalParameters(ArrowFormalParameters $arrowFormalParameters): ArrowParameters;

    public function createWithBindingIdentifier(BindingIdentifier $bindingIdentifier): ArrowParameters;
}
