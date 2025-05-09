<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\ScriptsAndModules\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasContains;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface FromClause extends Node, HasContains
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-modulerequests
     *
     * @return ListValue<StringValue>
     */
    public function moduleRequests(Agent $agent): ListValue;
}
