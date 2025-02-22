<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PrimaryExpression;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface FunctionExpression extends PrimaryExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-hasname
     */
    public function hasName(Agent $agent): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-namedevaluation
     *
     * @throws AbruptCompletion
     */
    public function namedEvaluation(Agent $agent, StringValue|SymbolValue $name): LanguageValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-instantiateordinaryfunctionexpression
     */
    public function instantiateOrdinaryFunctionExpression(Agent $agent, null|StringValue|SymbolValue $name = null): ObjectValue;
}
