<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface CodePointsToString
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-codepointstostring
     *
     * @param ListValue<int, int> $text
     */
    public function __invoke(Agent $agent, ListValue $text): StringValue;
}
