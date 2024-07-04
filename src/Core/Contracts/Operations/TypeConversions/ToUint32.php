<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\TypeConversions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface ToUint32
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-touint32
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $argument): NumberValue;
}
