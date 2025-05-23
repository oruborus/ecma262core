<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Statements\Productions;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface VariableDeclarationList extends Declaration
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-variable-statement-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(): LanguageValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-varscopeddeclarations
     *
     * @return ListValue<Declaration>
     */
    public function varScopedDeclarations(): ListValue;
}
