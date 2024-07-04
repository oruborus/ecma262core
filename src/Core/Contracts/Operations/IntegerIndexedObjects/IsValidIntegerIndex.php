<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IntegerIndexedObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;

interface IsValidIntegerIndex
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isvalidintegerindex
     */
    public function __invoke(Agent $agent, LanguageValue $o, NumberValue $index): BooleanValue;
}
