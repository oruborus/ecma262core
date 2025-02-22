<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowFormalParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\AsyncArrowHead;

interface AsyncArrowHeadFactory
{
    public function create(ArrowFormalParameters $arrowFormalParameters): AsyncArrowHead;
}
