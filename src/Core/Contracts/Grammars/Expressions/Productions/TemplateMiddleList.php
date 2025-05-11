<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface TemplateMiddleList extends Node, HasContains
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-template-literals-runtime-semantics-evaluation
     *
     * @throws AbruptCompletion
     */
    public function evaluate(): StringValue;

    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-substitutionevaluation
     *
     * @return ListValue<LanguageValue>
     *
     * @throws AbruptCompletion
     */
    public function substitutionEvaluation(): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-templatestrings
     *
     * @return ListValue<StringValue|UndefinedValue>
     */
    public function templateStrings(BooleanValue $raw): ListValue;
}
