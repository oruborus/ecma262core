<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BigIntValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface ToNumeric
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-tonumeric
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $value): NumberValue|BigIntValue;
}
