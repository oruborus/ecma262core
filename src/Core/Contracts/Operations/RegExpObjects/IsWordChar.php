<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\RegExpRecord;

interface IsWordChar
{
    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-iswordchar-abstract-operation
     *
     * @param ListValue<int> $input
     */
    public function __invoke(Agent $agent, RegExpRecord $rer, ListValue $input, int $e): BooleanValue;
}
