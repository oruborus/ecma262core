<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\RegularExpressions\Productions\Pattern;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ParsePattern
{

    /**
     * @see https://262.ecma-international.org/12.0/#sec-parsepattern
     *
     * @param ListValue<int, int> $patternText
     * @return Pattern|ListValue<int, ObjectValue> $patternText
     */
    public function __invoke(Agent $agent, ListValue $patternText, BooleanValue $u): Pattern|ListValue;
}
