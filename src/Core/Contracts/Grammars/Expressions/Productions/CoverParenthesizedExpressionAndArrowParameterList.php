<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowFormalParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ArrowParameters;
use Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions\BindingPattern;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContainsExpression;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsSimpleParameterList;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface CoverParenthesizedExpressionAndArrowParameterList extends HasContainsExpression, HasIsSimpleParameterList, PrimaryExpression
{
    public function getExpression(Agent $agent): Expression;

    public function getBinding(Agent $agent): null|BindingIdentifier|BindingPattern;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-coveredformalslist
     */
    public function coveredFormalsList(Agent $agent): ArrowParameters|ArrowFormalParameters;

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
}
