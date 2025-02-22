<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface Block extends Node
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-block-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(Agent $agent): LanguageValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevellexicallydeclarednames
     *
     * @return ListValue<int, StringValue>
     */
    public function topLevelLexicallyDeclaredNames(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevellexicallyscopeddeclarations
     *
     * @return ListValue<int, Declaration>
     */
    public function topLevelLexicallyScopedDeclarations(Agent $agent): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevelvardeclarednames
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
