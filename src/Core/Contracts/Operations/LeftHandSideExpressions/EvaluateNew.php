<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\LeftHandSideExpressions;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Arguments;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\MemberExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\NewExpression;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface EvaluateNew
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-evaluatenew
     *
     * @throws AbruptCompletion
     */
    public function __invoke(NewExpression|MemberExpression $constructExpr, ?Arguments $arguments): LanguageValue;
}
