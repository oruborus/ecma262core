<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PrivateName;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface ArrowFunction extends AssignmentExpression
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-hasname
     */
    public function hasName(): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-namedevaluation
     *
     * @throws AbruptCompletion
     */
    public function namedEvaluation(StringValue|SymbolValue $name): LanguageValue;


    /** @see https://tc39.es/ecma262/#sec-runtime-semantics-instantiatearrowfunctionexpression */
    public function instantiateArrowFunctionExpression(null|StringValue|SymbolValue|PrivateName $name = null): ObjectValue;
}
