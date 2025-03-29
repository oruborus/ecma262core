<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface CodePointsToString
{
    /**
     * @see https://tc39.es/ecma262/#sec-codepointstostring
     *
     * @param ListValue<non-negative-int, int<0, 1114111>> $text
     */
    public function __invoke(Agent $agent, ListValue $text): StringValue;
}
