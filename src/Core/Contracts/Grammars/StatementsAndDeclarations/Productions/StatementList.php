<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface StatementList extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#prod-StatementList
     *
     * @throws AbruptCompletion
     */
    public function evaluate(): LanguageValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevellexicallydeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function topLevelLexicallyDeclaredNames(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevellexicallyscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function topLevelLexicallyScopedDeclarations(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevelvardeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function topLevelVarDeclaredNames(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-toplevelvarscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function topLevelVarScopedDeclarations(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-lexicallydeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function lexicallyDeclaredNames(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-lexicallyscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function lexicallyScopedDeclarations(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-vardeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function varDeclaredNames(): ListValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-varscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function varScopedDeclarations(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsduplicatelabels
     *
     * @param ListValue<StringValue> $labelSet
     */
    public function containsDuplicateLabels(ListValue $labelSet): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsundefinedbreaktarget
     *
     * @param ListValue<StringValue> $labelSet
     */
    public function containsUndefinedBreakTarget(ListValue $labelSet): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-containsundefinedcontinuetarget
     *
     * @param ListValue<StringValue> $iterationSet
     * @param ListValue<StringValue> $labelSet
     */
    public function containsUndefinedContinueTarget(ListValue $iterationSet, ListValue $labelSet): BooleanValue;
}
