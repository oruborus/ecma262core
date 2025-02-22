<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\LeftHandSideExpressions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Expression;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface EvaluatePropertyAccessWithExpressionKey
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-evaluate-property-access-with-expression-key
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $baseValue, Expression $expression, BooleanValue $strict): ReferenceRecord;
}
