<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface AsyncConciseBody extends ConciseBody
{
    /**
     * @see https://tc39.es/ecma262/#sec-static-semantics-asyncconcisebodycontainsusestrict
     */
    public function asyncConciseBodyContainsUseStrict(Agent $agent): BooleanValue;
}
