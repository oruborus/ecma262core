<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface FromClause extends Node
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-modulerequests
     *
     * @return ListValue<int, StringValue>
     */
    public function moduleRequests(Agent $agent): ListValue;
}
