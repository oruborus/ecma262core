<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AsyncConciseBody extends Node, HasContains
{
    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-evaluatebody
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function evaluateFunctionBody(ObjectValue $functionObject, ListValue $argumentsList): LanguageValue;

    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-evaluatebody
     *
     * @param ListValue<LanguageValue> $argumentsList
     * @throws AbruptCompletion
     */
    public function evaluateBody(ObjectValue $functionObject, ListValue $argumentsList): LanguageValue;

    /** @see https://tc39.es/ecma262/#sec-static-semantics-asyncconcisebodycontainsusestrict */
    public function asyncConciseBodyContainsUseStrict(): BooleanValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-lexicallydeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function lexicallyDeclaredNames(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-lexicallyscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function lexicallyScopedDeclarations(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-vardeclarednames
     *
     * @return ListValue<StringValue>
     */
    public function varDeclaredNames(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-varscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function varScopedDeclarations(): ListValue;
}
