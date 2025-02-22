<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasLabelledEvaluation;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface LabelledItem extends Node, HasLabelledEvaluation
{
    public function statement(): Statement;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-vardeclarednames
     *
     * @return ListValue<int, StringValue>
     */
    public function topLevelVarDeclaredNames(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevelvarscopeddeclarations
     *
     * @return ListValue<int, Declaration>
     */
    public function topLevelVarScopedDeclarations(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-lexicallydeclarednames
     *
     * @return ListValue<int, StringValue>
     */
    public function lexicallyDeclaredNames(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-lexicallyscopeddeclarations
     *
     * @return ListValue<int, Declaration>
     */
    public function lexicallyScopedDeclarations(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-vardeclarednames
     *
     * @return ListValue<int, StringValue>
     */
    public function varDeclaredNames(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-varscopeddeclarations
     *
     * @return ListValue<int, Declaration>
     */
    public function varScopedDeclarations(Agent $agent): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsduplicatelabels
     *
     * @param ListValue<int, StringValue> $labelSet
     */
    public function containsDuplicateLabels(Agent $agent, ListValue $labelSet): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsundefinedbreaktarget
     *
     * @param ListValue<int, StringValue> $labelSet
     */
    public function containsUndefinedBreakTarget(Agent $agent, ListValue $labelSet): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsundefinedcontinuetarget
     *
     * @param ListValue<int, StringValue> $iterationSet
     * @param ListValue<int, StringValue> $labelSet
     */
    public function containsUndefinedContinueTarget(Agent $agent, ListValue $iterationSet, ListValue $labelSet): BooleanValue;
}
