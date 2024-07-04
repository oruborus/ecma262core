<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasBoundNames;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsSimpleParameterList;

interface AsyncArrowHead extends CallExpression, HasBoundNames, HasIsSimpleParameterList
{
    public function arrowFormalParameters(): ArrowFormalParameters;
}
