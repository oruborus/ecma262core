<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\CallExpression;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsSimpleParameterList;

interface CoverCallExpressionAndAsyncArrowHead extends HasIsSimpleParameterList, CallExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-async-arrow-function-definitions-static-semantics-CoveredAsyncArrowHead
     */
    public function coveredAsyncArrowHead(): AsyncArrowHead;
}
