<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArrayObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\NumberValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface SortCompare
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-sortcompare
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $x, LanguageValue $y, UndefinedValue|ObjectValue $comparefn): NumberValue;
}
