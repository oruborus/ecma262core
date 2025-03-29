<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface Canonicalize
{
    /** @see https://tc39.es/ecma262/#sec-runtime-semantics-canonicalize-ch */
    public function __invoke(Agent $agent, RegExpRecord $rer, StringValue $ch): StringValue;
}
