<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\StringObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface GetSubstitution
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getsubstitution
     * @see https://262.ecma-international.org/12.0/#table-replacement-text-symbol-substitutions
     *
     * @param ListValue<StringValue> $captures
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, StringValue $matched, StringValue $str, NumberValue $position, ListValue $captures, UndefinedValue|ObjectValue $namedCaptures, StringValue $replacement): StringValue;
}
