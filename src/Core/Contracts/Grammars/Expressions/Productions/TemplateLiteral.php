<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface TemplateLiteral extends PrimaryExpression
{
    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-argumentlistevaluation
     *
     * @return ListValue<LanguageValue>
     * @throws AbruptCompletion
     */
    public function argumentListEvaluation(Agent $agent): ListValue;

    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-templatestrings
     *
     * @return ListValue<StringValue|UndefinedValue>
     */
    public function templateStrings(Agent $agent, BooleanValue $raw): ListValue;
}
