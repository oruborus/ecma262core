<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\SourceText;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\Node;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface IsStrict
{
    /**
     * @see https://tc39.es/ecma262/#sec-isstrict
     */
    public function __invoke(Agent $agent, Node $node): BooleanValue;
}
