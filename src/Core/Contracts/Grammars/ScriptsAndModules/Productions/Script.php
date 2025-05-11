<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface Script extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-script-semantics-runtime-semantics-evaluation
     */
    public function evaluate(): LanguageValue;

    // FIXME: Rename to scriptIsStrict, @see https://tc39.es/ecma262/#sec-scriptisstrict
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-isstrict
     */
    public function isStrict(): BooleanValue;

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
}
