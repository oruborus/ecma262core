<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions\Declaration;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface ClassDeclaration extends Declaration
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-bindingclassdeclarationevaluation
     *
     * @throws AbruptCompletion
     */
    public function bindingClassDeclarationEvaluation(): LanguageValue;
}
