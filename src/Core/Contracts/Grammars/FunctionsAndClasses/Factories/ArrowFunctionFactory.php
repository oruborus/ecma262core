<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowFunction;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ConciseBody;

interface ArrowFunctionFactory
{
    public function create(ArrowParameters $arrowParameters, ConciseBody $conciseBody): ArrowFunction;
}
